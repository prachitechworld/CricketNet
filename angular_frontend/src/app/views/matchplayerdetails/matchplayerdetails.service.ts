import { Injectable } from '@angular/core';
import { HttpClient,HttpHeaders } from '@angular/common/http';
import { Observable } from "rxjs/Observable";
import { forkJoin } from "rxjs/observable/forkJoin";

@Injectable({
  providedIn: 'root'
})
export class MatchplayerdetailsService {

  constructor(private http: HttpClient) { }

  getData(id): Observable<any> {
    
    let requestUri1 = "http://localhost:8000/api/match-details/"+id;
    let requestUri2 = "http://localhost:8000/api/match-players-data/"+id;

    let response1 = this.http.get(requestUri1);
    let response2 = this.http.get(requestUri2);    
    return forkJoin([response1, response2]);

  }
}

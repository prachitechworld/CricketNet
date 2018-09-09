import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from "rxjs/Observable";


@Injectable({
  providedIn: 'root'
})
export class PlayerhistoryService {

  

  constructor(private http: HttpClient) { }

  getDetails(id): Observable<any> {
    var url = "http://localhost:8000/api/player-history";
    url=url+"/"+id;
    return this.http.get<any>(url);
  }

}
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from "rxjs/Observable";

@Injectable({
  providedIn: 'root'
})
export class MatchdetailsService {

  private url = "http://localhost:8000/api/match-details";

  constructor(private http: HttpClient) { }

  getMatches(): Observable<any> {
    return this.http.get<any>(this.url);
  }
}

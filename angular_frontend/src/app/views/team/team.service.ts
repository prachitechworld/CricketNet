import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from "rxjs/Observable";


@Injectable({
  providedIn: 'root'
})
export class TeamService {

  private url = "http://localhost:8000/api/teams";

  constructor(private http: HttpClient) { }

  getTeams(): Observable<any> {
    return this.http.get<any>(this.url);
  }

}

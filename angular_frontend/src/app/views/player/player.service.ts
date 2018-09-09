import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from "rxjs/Observable";
import { forkJoin } from "rxjs/observable/forkJoin";



@Injectable({
  providedIn: 'root'
})
export class PlayerService {


  constructor(private http: HttpClient) { }

   getPlayers(team_id): Observable<any[]> {
    // console.log(team_id);
  let requestUri1 = "http://localhost:8000/api/teams/"+team_id;
  let requestUri2 = "http://localhost:8000/api/players/"+team_id;

    let response1 = this.http.get(requestUri1);
    let response2 = this.http.get(requestUri2);
    
    return forkJoin([response1, response2]);
  }

}

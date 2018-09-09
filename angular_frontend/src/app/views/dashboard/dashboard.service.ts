import { Injectable } from '@angular/core';
import { HttpClient,HttpHeaders } from '@angular/common/http';
import { Observable } from "rxjs/Observable";
import { Constants } from "../../config/constant";
import { forkJoin } from "rxjs/observable/forkJoin";

@Injectable({
  providedIn: 'root'
})
 /**
     * @author: Prachi Aggarwal <prachijobs90@gmail.com>
     * @date: 02-sep-2018
     * @description : Provide all match details
     * |getData : get team & match data for ratings & points
     * |getTeamsData : get data for fixture
     */

export class DashboardService {

private token;

constructor(private http: HttpClient) { }

  getData(): Observable<any> {
    
    this.token=Constants.TOKEN;
    let requestUri1 = "http://localhost:8000/api/teams-data";
    let requestUri2 = "http://localhost:8000/api/match-details";

    let headers = new HttpHeaders().set('Content-Type', 'application/json')
    .set('authorization', this.token);
    let response1 = this.http.get(requestUri1,{headers:headers});
    let response2 = this.http.get(requestUri2);    
    return forkJoin([response1, response2]);

  }

  getTeamsData() :Observable<any>{    
    let requestUri1 = "http://localhost:8000/api/match-details";
    let requestUri2 = "http://localhost:8000/api/match-team-data";

    let headers = new HttpHeaders().set('Content-Type', 'application/json')
    .set('authorization', this.token);
    let response1 = this.http.get(requestUri1,{headers:headers});
    let response2 = this.http.get(requestUri2);    
    return forkJoin([response1, response2]);
  }

}
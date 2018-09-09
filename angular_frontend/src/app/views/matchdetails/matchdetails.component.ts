import { Component, OnInit } from '@angular/core';
import { MatchdetailsService } from "./matchdetails.service";

@Component({
  selector: 'app-matchdetails',
  templateUrl: './matchdetails.component.html',
  styleUrls: ['./matchdetails.component.scss']
})
export class MatchdetailsComponent implements OnInit {

  public matchDetails:any;

  constructor(private serv:MatchdetailsService) { }

  
  public jump(id){
    window.location.href='#/matchplayerdetails/'+id;
  }
  
  ngOnInit() {
    this.serv.getMatches().subscribe(data => {
      this.matchDetails = data;
      
    });
  }

}

import { Component, OnInit } from '@angular/core';
import {PlayerhistoryService} from './playerhistory.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-playerhistory',
  templateUrl: './playerhistory.component.html',
  styleUrls: ['./playerhistory.component.scss']
})
export class PlayerhistoryComponent implements OnInit {

  public player_id;
  public matches;public runs; public highest_scores; public fifties;public hundreds;
  
  constructor(private serv:PlayerhistoryService,private activeRoute:ActivatedRoute) { }

  ngOnInit() {
    this.player_id=this.activeRoute.snapshot.params.id;
    this.serv.getDetails(this.player_id).subscribe(data => {
      this.matches=data[0].matches;
      this.runs=data[0].runs;
      this.highest_scores=data[0].highest_score;
      this.fifties=data[0].fifties;
      this.hundreds=data[0].hundreds;
      
    });

  }


}

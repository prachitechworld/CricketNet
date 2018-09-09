import { Component, OnInit } from '@angular/core';
import {PlayerService} from './player.service';
import {Constants} from '../../config/constant';
import { ActivatedRoute } from '@angular/router';


@Component({
  selector: 'app-player',
  templateUrl: './player.component.html',
  styleUrls: ['./player.component.scss']
})
export class PlayerComponent implements OnInit {

  
  public teamName;
  public teamLogo;
  public playerData:any;
  public url;
  public team_id;

  constructor(private serv:PlayerService,private activeRoute:ActivatedRoute) { }

  ngOnInit() {
    
    this.team_id=this.activeRoute.snapshot.params.id;
    this.serv.getPlayers(this.team_id).subscribe(data => {
      this.teamName = data[0][0].name;
      this.teamLogo = data[0][0].logo_uri;
      this.playerData = data[1];
      this.url=Constants.BACKEND_URL;
      
    });

  }

}

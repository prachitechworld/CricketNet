import { Component, OnInit } from '@angular/core';
import { TeamService } from "./team.service";
import { Constants } from "../../config/constant";


@Component({
  selector: 'app-team',
  templateUrl: './team.component.html',
  styleUrls: ['./team.component.scss']
})
export class TeamComponent implements OnInit {

  public teamData:any;
  public url;

  constructor(private serv:TeamService) { }

  ngOnInit() {
    this.serv.getTeams().subscribe(data => {
      this.teamData = data;
      this.url=Constants.BACKEND_URL;
      
    });

  }

}

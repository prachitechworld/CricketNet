import { Component, OnInit } from '@angular/core';
import {MatchplayerdetailsService} from "./matchplayerdetails.service";
import { ActivatedRoute } from '@angular/router';
import { getStyle, hexToRgba } from '@coreui/coreui/dist/js/coreui-utilities';
import { Constants } from "../../config/constant";

@Component({
  selector: 'app-matchplayerdetails',
  templateUrl: './matchplayerdetails.component.html',
  styleUrls: ['./matchplayerdetails.component.scss']
})
export class MatchplayerdetailsComponent implements OnInit {

  constructor(private serv:MatchplayerdetailsService, private activeRoute:ActivatedRoute) { }
  public teamA;
  public teamB;
  public teamALogo;
  public teamBLogo;
  public teamARuns;
  public teamBRuns;
  public playersAData;
  public playersBData;
  public match_id;
  public url;

  ngOnInit() {
    this.match_id=this.activeRoute.snapshot.params.id;
    this.url=Constants.BACKEND_URL;

    this.serv.getData(this.match_id).subscribe(data=>{
      this.teamA=data[0][0].teamA;
      this.teamB=data[0][0].teamB;
      this.teamALogo=data[0][0].teamALogo;
      this.teamBLogo=data[0][0].teamBLogo;
      this.teamARuns=data[1].teamARuns
      this.teamBRuns=data[1].teamBRuns;
      this.playersAData=data[1].teamA;
      this.playersBData=data[1].teamB;
    })
  }

}

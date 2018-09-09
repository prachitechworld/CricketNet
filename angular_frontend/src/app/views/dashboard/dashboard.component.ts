import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { getStyle, hexToRgba } from '@coreui/coreui/dist/js/coreui-utilities';
import { CustomTooltips } from '@coreui/coreui-plugin-chartjs-custom-tooltips';
import {DashboardService} from './dashboard.service';
import { Constants } from "../../config/constant";

@Component({
  templateUrl: 'dashboard.component.html'
})
export class DashboardComponent implements OnInit {

  public playerChartLabels: string[] = ['Gautam Gambhir', 'Chris Lynn', 'Virat Kohli'];
  public playerChartData: number[] = [5238, 158, 9779];
  public pieChartType = 'pie';

  public teamChartLabels: string[] = ['Dare Devils', 'Knight Riders', 'Royal Challengers'];
  public teamChartData: number[] = [0, 1, 2];

  public teamData;
  public matchData;
  public url;
  
  constructor(private serv:DashboardService) {}

  
  public chartClicked(e: any): void {
    console.log(e);
  }

  public chartHovered(e: any): void {
    console.log(e);
  }

  public jump(id){
    window.location.href='#/matchplayerdetails/'+id;
  }
  ngOnInit(): void {
    // generate random values for mainChart
    this.serv.getData().subscribe(data => {
      this.teamData = data[0];
      this.matchData = data[1];
      this.url=Constants.BACKEND_URL;
      console.log(data);
      
    });
   
  }
}

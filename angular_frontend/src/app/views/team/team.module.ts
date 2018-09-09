import { NgModule } from '@angular/core';
import { ChartsModule } from 'ng2-charts/ng2-charts';
import { BsDropdownModule } from 'ngx-bootstrap/dropdown';
import {CommonModule} from '@angular/common'

import { TeamComponent } from './team.component';
import { TeamRoutingModule } from './team-routing.module';

@NgModule({
  imports: [
    TeamRoutingModule,
    ChartsModule,
    BsDropdownModule,
    CommonModule
  ],
  declarations: [ TeamComponent ]
})
export class TeamModule { }

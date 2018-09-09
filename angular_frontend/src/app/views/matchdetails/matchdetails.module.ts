import { NgModule } from '@angular/core';
import { ChartsModule } from 'ng2-charts/ng2-charts';
import { BsDropdownModule } from 'ngx-bootstrap/dropdown';
import {CommonModule} from '@angular/common'

import { MatchdetailsComponent } from './matchdetails.component';
import { MatchdetailsRoutingModule } from './matchdetails-routing.module';

@NgModule({
  imports: [
    MatchdetailsRoutingModule,
    ChartsModule,
    BsDropdownModule,
    CommonModule
  ],
  declarations: [ MatchdetailsComponent ]
})
export class MatchdetailsModule { }

import { NgModule } from '@angular/core';
import { ChartsModule } from 'ng2-charts/ng2-charts';
import { BsDropdownModule } from 'ngx-bootstrap/dropdown';
import {CommonModule} from '@angular/common'

import { PlayerhistoryComponent } from './playerhistory.component';
import { PlayerhistoryRoutingModule } from './playerhistory-routing.module';

@NgModule({
  imports: [
    PlayerhistoryRoutingModule,
    ChartsModule,
    BsDropdownModule,
    CommonModule
  ],
  declarations: [ PlayerhistoryComponent ]
})
export class PlayerhistoryModule { }

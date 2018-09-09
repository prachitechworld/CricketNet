import { NgModule } from '@angular/core';
import { ChartsModule } from 'ng2-charts/ng2-charts';
import { BsDropdownModule } from 'ngx-bootstrap/dropdown';
import {CommonModule} from '@angular/common'

import { PlayerComponent } from './player.component';
import { PlayerRoutingModule } from './player-routing.module';

@NgModule({
  imports: [
    PlayerRoutingModule,
    ChartsModule,
    BsDropdownModule,
    CommonModule
  ],
  declarations: [ PlayerComponent ]
})
export class PlayerModule { }

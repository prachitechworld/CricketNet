import { NgModule } from '@angular/core';
import { ChartsModule } from 'ng2-charts/ng2-charts';
import { BsDropdownModule } from 'ngx-bootstrap/dropdown';
import {CommonModule} from '@angular/common'
import { FormsModule } from '@angular/forms';

import { MatchplayerdetailsComponent } from './matchplayerdetails.component';
import { MatchplayerdetailsRoutingModule } from './matchplayerdetails-routing.module';

// Tabs Component
import { TabsModule } from 'ngx-bootstrap/tabs';
import { TabsComponent } from '../base/tabs.component';

@NgModule({
  imports: [
    MatchplayerdetailsRoutingModule,
    ChartsModule,
    BsDropdownModule,
    CommonModule,
    TabsModule
  ],
  declarations: [ MatchplayerdetailsComponent,TabsComponent ]
})
export class MatchplayerdetailsModule { }

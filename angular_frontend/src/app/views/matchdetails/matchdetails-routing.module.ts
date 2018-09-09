import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { MatchdetailsComponent } from './matchdetails.component';

const routes: Routes = [
  {
    path: '',
    component: MatchdetailsComponent,
    data: {
      title: 'Players'
    }
  },
  {
    path: ':id',
    component: MatchdetailsComponent,
    data: {
      title: 'Players'
    }
  }
  
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MatchdetailsRoutingModule {}

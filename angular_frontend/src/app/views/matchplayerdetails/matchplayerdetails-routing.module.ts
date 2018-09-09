import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { MatchplayerdetailsComponent } from './matchplayerdetails.component';

const routes: Routes = [
    {
    path: ':id',
    component: MatchplayerdetailsComponent,
    data: {
      title: 'Details'
    }
  }
  
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MatchplayerdetailsRoutingModule {}

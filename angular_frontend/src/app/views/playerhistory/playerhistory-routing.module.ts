import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PlayerhistoryComponent } from './playerhistory.component';

const routes: Routes = [
   {
    path: ':id',
    component: PlayerhistoryComponent,
    data: {
      title: 'Player History'
    }
  }
  
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PlayerhistoryRoutingModule {}

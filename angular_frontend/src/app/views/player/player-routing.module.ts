import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PlayerComponent } from './player.component';

const routes: Routes = [
  {
    path: '',
    component: PlayerComponent,
    data: {
      title: 'Players'
    }
  },
  {
    path: ':id',
    component: PlayerComponent,
    data: {
      title: 'Players'
    }
  }
  
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PlayerRoutingModule {}

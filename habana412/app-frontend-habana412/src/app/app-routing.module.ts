import { LandingComponent } from './landing/landing.component';
import { RoomDetailComponent } from './room-detail/room-detail.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent} from './home/home.component';
import { RoomsComponent} from './rooms/rooms.component';
import { LocationComponent} from './location/location.component';
import { ContactComponent} from './contact/contact.component';

const routes: Routes = [
  { path: 'landing', component: LandingComponent},
  { path: 'home', component: HomeComponent},
  { path: 'contact', component: ContactComponent},
  { path: 'rooms', component: RoomsComponent },
  { path: 'location', component: LocationComponent},
  { path: 'contact', component: ContactComponent},
  { path: 'room-detail/:id', component: RoomDetailComponent },
  { path: '**', component: LandingComponent, pathMatch: 'full' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

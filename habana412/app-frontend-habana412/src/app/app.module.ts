import { RoomsModule } from './rooms/rooms.module';
import { BrowserModule } from '@angular/platform-browser';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { NgModule } from '@angular/core';
import { MaterialModule } from './material/material.module'
import { from } from 'rxjs';
import { AppRoutingModule } from './app-routing.module';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { HomeComponent } from './home/home.component';
import { RoomsComponent } from './rooms/rooms.component';
import { LocationComponent } from './location/location.component';
import { ContactComponent } from './contact/contact.component';
import { AirbnbButtonComponent } from './shared/airbnb-button/airbnb-button.component';
import { RoomDetailComponent } from './room-detail/room-detail.component';
import { RoomDetailModule } from './room-detail/room-detail.module';
import { LandingComponent } from './landing/landing.component';


@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    RoomsComponent,
    LocationComponent,
    ContactComponent,
    AirbnbButtonComponent,
    RoomDetailComponent,
    LandingComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MaterialModule,
    FormsModule,
    ReactiveFormsModule,
    RoomsModule,
    RoomDetailModule
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

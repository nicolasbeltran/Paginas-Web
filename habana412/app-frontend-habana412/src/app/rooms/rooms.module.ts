import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RoomsService } from './rooms.service';
import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    HttpClientModule
  ],
  providers: [
    RoomsService
  ]
})
export class RoomsModule { }

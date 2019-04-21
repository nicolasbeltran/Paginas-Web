import { Room } from './../shared/models/rooms.model';
import { RoomsService } from './rooms.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-rooms',
  templateUrl: './rooms.component.html',
  styleUrls: ['./rooms.component.scss']
})
export class RoomsComponent implements OnInit {

  rooms: Room[];

  constructor(private roomsService: RoomsService) { }

  ngOnInit() {
    document.getElementsByTagName("body")[0].style["background-image"] = "none";
    this.rooms = JSON.parse(sessionStorage.getItem('roomsData'));
    console.log(this.rooms)
    //if(this.rooms == null){
    console.log('no hay rooms')
    this.roomsService.getRooms()
    .subscribe((rooms: any) => {
      console.log('llamo al servicio')
      sessionStorage.setItem('roomsData', JSON.stringify(rooms));
      this.rooms = rooms;
      console.log(this.rooms)
    });
    //}
   }

}

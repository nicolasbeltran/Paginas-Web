import { Room } from './../shared/models/rooms.model';

import { Injectable } from '@angular/core';

@Injectable()
export class RoomDetailService {

  rooms: Room[];

  constructor() { }

  getRoomDetail(idRoom: number): Room {
    console.log('llama a getRoomDetail');
    this.rooms = JSON.parse(sessionStorage.getItem('roomsData'));
    console.log(this.rooms);
    return this.rooms[idRoom - 1];
  }

}
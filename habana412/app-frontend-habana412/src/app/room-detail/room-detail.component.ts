import { RoomDetailService } from './room-detail.service';
import { Room } from './../shared/models/rooms.model';
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Params } from '@angular/router';

@Component({
  selector: 'app-room-detail',
  templateUrl: './room-detail.component.html',
  styleUrls: ['./room-detail.component.scss']
})
export class RoomDetailComponent implements OnInit {

  room: Room;

  constructor(
    private route: ActivatedRoute,
    private roomDetailService: RoomDetailService
  ) { }

  ngOnInit() {
    this.route.params.subscribe((params: Params) => {
      console.log('entra a rooms detail');
      let idRoom: number = params['id'];
      this.room = this.roomDetailService.getRoomDetail(idRoom);
      console.log(this.room)
    });

  }

}

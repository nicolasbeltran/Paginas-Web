import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable ,  of } from 'rxjs';
import { map, catchError } from 'rxjs/operators';

const url = 'rooms.json';


@Injectable()
export class RoomsService {

  constructor(private httpClient: HttpClient) { }

  getRooms(): Observable<string> {
    return this.httpClient
      .get(url)
      .pipe(
        map((body: any) => body),
        catchError(() => of('Error, could not load joke :-('))
      );
  }

}


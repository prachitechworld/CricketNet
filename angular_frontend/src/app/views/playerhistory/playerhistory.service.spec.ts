import { TestBed, inject } from '@angular/core/testing';

import { PlayerhistoryService } from './playerhistory.service';

describe('PlayerhistoryService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [PlayerhistoryService]
    });
  });

  it('should be created', inject([PlayerhistoryService], (service: PlayerhistoryService) => {
    expect(service).toBeTruthy();
  }));
});

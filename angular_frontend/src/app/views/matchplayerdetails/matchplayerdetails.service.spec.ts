import { TestBed, inject } from '@angular/core/testing';

import { MatchplayerdetailsService } from './matchplayerdetails.service';

describe('MatchplayerdetailsService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [MatchplayerdetailsService]
    });
  });

  it('should be created', inject([MatchplayerdetailsService], (service: MatchplayerdetailsService) => {
    expect(service).toBeTruthy();
  }));
});

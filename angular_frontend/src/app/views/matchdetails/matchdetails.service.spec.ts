import { TestBed, inject } from '@angular/core/testing';

import { MatchdetailsService } from './matchdetails.service';

describe('MatchdetailsService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [MatchdetailsService]
    });
  });

  it('should be created', inject([MatchdetailsService], (service: MatchdetailsService) => {
    expect(service).toBeTruthy();
  }));
});

import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MatchplayerdetailsComponent } from './matchplayerdetails.component';

describe('MatchplayerdetailsComponent', () => {
  let component: MatchplayerdetailsComponent;
  let fixture: ComponentFixture<MatchplayerdetailsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MatchplayerdetailsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MatchplayerdetailsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { Angularjs2Page } from './app.po';

describe('angularjs2 App', function() {
  let page: Angularjs2Page;

  beforeEach(() => {
    page = new Angularjs2Page();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});

import { newE2EPage } from '@stencil/core/testing';

describe('benites-stars-rating', () => {
  it('renders', async () => {
    const page = await newE2EPage();
    await page.setContent('<benites-stars-rating></benites-stars-rating>');

    const element = await page.find('benites-stars-rating');
    expect(element).toHaveClass('hydrated');
  });
});

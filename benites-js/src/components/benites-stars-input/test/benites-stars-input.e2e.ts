import { newE2EPage } from '@stencil/core/testing';

describe('benites-stars-input', () => {
  it('renders', async () => {
    const page = await newE2EPage();
    await page.setContent('<benites-stars-input></benites-stars-input>');

    const element = await page.find('benites-stars-input');
    expect(element).toHaveClass('hydrated');
  });
});

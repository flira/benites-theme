import { newE2EPage } from '@stencil/core/testing';

describe('benites-store', () => {
  it('renders', async () => {
    const page = await newE2EPage();
    await page.setContent('<benites-store></benites-store>');

    const element = await page.find('benites-store');
    expect(element).toHaveClass('hydrated');
  });
});

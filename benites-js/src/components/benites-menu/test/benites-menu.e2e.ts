import { newE2EPage } from '@stencil/core/testing';

describe('benites-menu', () => {
  it('renders', async () => {
    const page = await newE2EPage();
    await page.setContent('<benites-menu></benites-menu>');

    const element = await page.find('benites-menu');
    expect(element).toHaveClass('hydrated');
  });
});

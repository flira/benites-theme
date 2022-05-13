import { newSpecPage } from '@stencil/core/testing';
import { BenitesStarsRating } from '../benites-stars-rating';

describe('benites-stars-rating', () => {
  it('renders', async () => {
    const page = await newSpecPage({
      components: [BenitesStarsRating],
      html: `<benites-stars-rating></benites-stars-rating>`,
    });
    expect(page.root).toEqualHtml(`
      <benites-stars-rating>
        <mock:shadow-root>
          <slot></slot>
        </mock:shadow-root>
      </benites-stars-rating>
    `);
  });
});

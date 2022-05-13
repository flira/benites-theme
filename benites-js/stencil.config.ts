import { Config } from '@stencil/core';
import { postcss } from '@stencil/postcss';
import atImport from 'postcss-import';
import autoprefixer from 'autoprefixer';
import mqpacker from '@hail2u/css-mqpacker';
import postcssFor from 'postcss-for';
import postcssMixins from 'postcss-mixins';

// https://stenciljs.com/docs/config

export const config: Config = {
  namespace: 'benites',
  globalScript: 'src/global/theme.ts',
  globalStyle: 'src/global/theme.css',
  taskQueue: 'async',
  outputTargets: [
    {
      type: 'www',
      baseUrl: 'https://bento.toscocloud.com/',
      prerenderConfig: './prerender.config.ts'
    }
  ],
  plugins: [
    postcss({
      plugins: [
        postcssFor(),
        postcssMixins(),
        atImport(),
        autoprefixer(),
        mqpacker()]
    })
  ]
};

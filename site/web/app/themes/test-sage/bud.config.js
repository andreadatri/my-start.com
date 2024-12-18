/**
 * Compiler configuration
 *
 * @see {@link https://roots.io/sage/docs sage documentation}
 * @see {@link https://bud.js.org/learn/config bud.js configuration guide}
 *
 * @type {import('@roots/bud').Config}
 */
export default async (app) => {
  app
    .entry({
      app: ['@scripts/app', '@styles/app'],
      editor: ['@scripts/editor', '@styles/editor'],
    })
    .assets(['images'])
    .watch(['resources/views/**/*.blade.php', 'app/**/*.php'])
    .proxy('http://my-start.test')
    .serve('http://localhost:3000')
    .setPublicPath('/app/themes/test-sage/public/');
};

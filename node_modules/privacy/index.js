var fs = require('fs')
var path = require('path')
var dotjson = require('dotjson')

var optimist = require('optimist')
  .usage(require('heredoc')(function(){/*
Usage: $0 [options]

  set module's registry to global default
      $0

  get module registry
      $0 -r, --registry

  set module registry
      $0 -r, --registry <registry url>

  get global registry
    $0-g, --global

  set global registry
    $0 -g, --global <registry url>
*/}))
  .alias('h','help')
    .boolean('h')
    .describe('h', 'show help')
  .alias('r','registry')
    .describe('r', 'gets or sets the current module\'s registry url')
  .alias('l','licenseText')
    .describe('l', 'The text to save in LICENSE as a SPDX-compatible license file')
    .default('l', '(c) '+(new Date()).getFullYear()+' Jane Doe')
var argv = optimist.argv


if (argv.help) {
  optimist.showHelp()
  process.exit()
}

const LICENSE_FILENAME = 'LICENSE'
const LICENSE_VALUE = 'LicenseRef-LICENSE'
const LOCAL = path.resolve(process.cwd(), 'package.json')

if (argv.registry || argv.licenseText) {
  if (argv.registry) {
    dotjson.set(LOCAL, {
      'publishConfig.registry': argv.registry
    })
  }
  if (argv.licenseText) {
    fs.writeFileSync(LICENSE_FILENAME, argv.licenseText)
    dotjson.set(LOCAL, {
      'license': LICENSE_VALUE
    })
  }
  process.exit()
}

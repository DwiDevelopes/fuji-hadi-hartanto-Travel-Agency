# privacy

CLI utility to modify a package.json to use a private npm registry

helpful for publishing lots of private packages

## usage

in a module's directory:

set module's registry to http://artifacts.foo.com/api/npm/npm-local & add a proprietary license file
    $ privacy -r http://artifacts.foo.com/api/npm/npm-local -l "(c) 2015 Foo, Inc."

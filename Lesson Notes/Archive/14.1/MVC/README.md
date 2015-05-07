# Installation
> You will need Node and Bower installed in order to make using this framework easy

## Bower for Ubuntu Users
Step 1: Install Node
```sh
$ sudo apt-get install nodejs
```
Step 2: Fix Node. With Ubuntu Step 3 might not work until you do this fix. So try Step 3 first, then if it doesn't work, do Step 2 then Step 3
```sh
$ sudo ln -s /usr/bin/nodejs /usr/bin/node
```
Step 3: Use Node to install Bower
```sh
$ sudo npm install -g bower
```

## Bower for OSX Users
Step 1: Install Homebrew (a similar tool to Ubuntu's apt-get)
```sh
sudo ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)"
```
Step 2: Use Homebrew to install Node
```sh
$ brew install node
```
Step 3: Use Node to install Bower
```sh
$ sudo npm install -g bower
```
# If you want to use SASS
While node is installed on your system (because of the above steps), you can now use node (and the npm system) to download certain tools for this project. The tools that will be installed are listed in your `package.json` file. Currently that file is setup to install Grunt, Sass, and Autoprefixer. The command to tell node to install the tools listed in the package file is:
```sh
$ npm install
```
Your node modules will now be installed in your `node_modules/` folder. You probably won't need to go in this folder for anything.
# User Bower to install cool Client-Side tools
While bower is installed on your system (because of the above steps), you can now use bower to download certain tools for this project. The tools that will be installed are listed in your `bower.json` file. Currently that file is setup to install jQuery, Modernizr, and ReptileForms. The command to tell bower to install the tools listed in the bower file is:
```sh
$ bower install
```
Your bower components will now be installed in your `bower_components` folder.





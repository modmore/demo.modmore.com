# demo.modmore.com

This is the new modmore demo site. It is not yet finished, and as such not yet live!

The demo site is managed with [Gitify](https://github.com/modmore/Gitify). The design/front-end is based on [Hostro theme from ThemeForest](http://themeforest.net/item/hostro-hosting-html-template/11942915?ref=markhamstra). The goal of the demo site is to provide a realistic example of how the Premium Extras from modmore can be used. 

## Building the Demo Site

To create an instance of the demo site, these are the steps to follow:

1. Clone the repository: `git clone git@github.com:modmore/demo.modmore.com.git`
2. Enter the directory: `cd demo.modmore.com`
3. If you haven't yet, [install Gitify](https://github.com/modmore/Gitify/wiki/1.-Installation).
4. Ask Mark for the `.modmore.com.key` file, which contains the API Key for the modmore provider, and add it in the root of the repository.   
5. Install MODX using `Gitify modx:install` or `Gitify modx:install v2.4.0-pl`
6. Install the used packages using `Gitify package:install --all`, this may take a bit of time.
7. Run `Gitify build` to inject all data from the repository into MODX. 

## Making changes

After the build, you can login to the manager and make changes as needed. When you want those changes committed back, here's what you need to do. 

1. Extract the data: `Gitify extract`
2. If you updated any packages, or if you added new ones, update the list of packages in the `.gitify` file. This is manual currently, though Gitify will get a new command for that soon.
3. Commit the changed files in `_data` and any other files you may have changed.
4. Push.

If the changes require a review, or if they are not ready to be deployed to the live demo site, create a new branch based on master and commit the changes on that. Push the branch with `git push -u origin <name of branch>`, and open a pull request on github.  

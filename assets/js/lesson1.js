
    jQuery(function($, undefined) {
    $('#pwd').terminal(function(command) {
            if (command == "pwd") {
                this.echo("/dotQuiet/lesson1/" );
            }
            else{
                this.echo("wrong command try pwd" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
    
    $('#ls').terminal(function(command) {
            if (command == "ls") {
                this.echo("dir1 dir2 dir3 welcome.txt" );
            }
            else{
                this.echo("wrong command try ls" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        
    $('#cd').terminal(function(command) {
        var cd = "cd ?"
            if (command.match(cd)) {
                this.echo("Correct command for changing directory" );
            }
            else{
                this.echo("wrong command try cd" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        
    $('#cd2').terminal(function(command) {
            if (command == "pwd") {
                this.echo("/dotQuiet/lesson1/dir1" );
            }
            else{
                this.echo("wrong command try pwd" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        
    $('#mkdir').terminal(function(command) {
        var mkdir = 'mkdir ?';
        var name;
            if (command.match(mkdir)) {
                name = command.split(" ");
                this.echo("Correct command for changing directory")
            }
            else if (command == "ls"){
                this.echo("/dotQuiet/lesson1/" + name[1] );
                     }
            else{
                this.echo("wrong command try ls/mkdir" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        
    $('#rmdir').terminal(function(command) {
         var rmdir = "rmdir ?"
            if (command.match(rmdir)) {
                this.echo("Correct command for removing directory" );
            }
            else{
                this.echo("wrong command try rmdir" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
    
    $('#clear').terminal(function(command) {
            if (command == "clear") {
                term.clear();
            }
            else{
                this.echo("wrong command try clear" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        $('#man').terminal(function(command) {
            if (command == "man") {
                this.echo("This is display manual");
            }
            else{
                this.echo("wrong command try man" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        
});
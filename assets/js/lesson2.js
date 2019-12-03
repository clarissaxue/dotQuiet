jQuery(function($, undefined) {
    $('#touch').terminal(function(command) {
            if (command =="touch song.txt") {
                this.echo("dir1 dir2 dir3 welcome.txt song.txt" );
            }
            else{
                this.echo("wrong command try touch song.txt" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
    
    $('#rm').terminal(function(command) {
            if (command =="rm song.txt") {
                this.echo("success" );
                this.echo("dir1 dir2 dir3 welcome.txt" );
            }
            else{
                this.echo("wrong command try rm song.txt" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
    
    $('#mv').terminal(function(command) {
            if (command.match("cd books")) {
                this.echo("directory changed" );
            }
            else if (command.match("mv 'The Shining.pdf' ..")) {
                this.echo("success" );
            }
            else{
                this.echo("wrong command try cd books and mv 'The Shining.pdf' .." );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
    $('#mv2').terminal(function(command) {
            if (command.match("cd books")) {
                this.echo("directory changed" );
            }
            else if (command.match("mv 'The Shining.pdf' ..")) {
                this.echo("success" );
            }
            else{
                this.echo("wrong command try cd books and mv 'The Shining.pdf' .." );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
    
    $('#chmod').terminal(function(command) {
            if (command == "../'song lyrics'" || "cd .. \ cd 'song lyrics'") {
                this.echo("directory changed" );
            }
            else if (command== "ls -l") {
                this.echo("drwxr-xr-x dotQuiet dotQuiet (size) (timestamp) pop" );
                this.echo("drwxr-xr-x dotQuiet dotQuiet (size) (timestamp) rock" );
                this.echo("-r-xr-xr-x dotQuiet dotQuiet (size) (timestamp) 'Amazing Grace.txt'" );
            }
            else{
                this.echo("wrong command try cd ../'song lyrics' or cd .. \ cd 'song lyrics'" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
    
        $('#chmod2').terminal(function(command) {
            if (command == " chmod 'Amazing Grace.txt' 775") {
                this.echo("permission changed" );
            }
            else if (command== "ls -l") {
                this.echo("drwxr-xr-x dotQuiet dotQuiet (size) (timestamp) pop" );
                this.echo("drwxr-xr-x dotQuiet dotQuiet (size) (timestamp) rock" );
                this.echo("-rwxr-xr-x  dotQuiet dotQuiet (size) (timestamp) 'Amazing Grace.txt'" );
            }
            else{
                this.echo("wrong command try  chmod 'Amazing Grace.txt'" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        
    $('#wildcard').terminal(function(command) {
            if (command == "cd rock") {
                this.echo("directory changed" );
            }
            else if (command== "ls -l" || "ls") {
                this.echo("'The Beatles - I Am The Walrus.txt' 'The Beatles - Hey Jude.txt' 'The Beatles - Strawberry Fields Forever.txt' 'The Doors - Light My Fire.txt' 'The Doors - The End.txt'" );
            }
            else if (command== "rm 'The Beatles'*") {
                this.echo("all files removed" );
                his.echo("'The Doors - Light My Fire.txt' 'The Doors - The End.txt'" );
            }
            else{
                this.echo("wrong command try cd then ls (or ls -l)" );
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        
});
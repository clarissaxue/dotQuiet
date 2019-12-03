jQuery(function($, undefined) {
         $('#locate').terminal(function(command) {
            if (command == "locate *.txt") {
                this.echo("displays all text files in system" );
            }
            else{
                this.echo("wrong command try locate *.txt ");
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
    $('#ssh').terminal(function(command) {
            if (command == "ssh dotQuiet.org") {
                this.echo("dotQuiet.org connected" );
            }
            else{
                this.echo("wrong command try ssh dotQuiet.org");
            }
        }
    , {
        greetings: 'Linux terminal',
        height: 200,
        width: 450,
        prompt: '> '
    });
        
});
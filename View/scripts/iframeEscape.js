function escape_from_iframe_trap()
{
    // source http://www.shouthuns.com/javascript/escape-from-iframe-trap.html
    // for an explanation visit source website!
    if (top.location != location) {
        top.location.href = document.location.href ;
    }
}



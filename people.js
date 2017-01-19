var confirm_clear_session = function() {
    if (confirm("Erase all data and restart with a new session?")) {
        document.location = "people.php?clear_session=true";
    };
}

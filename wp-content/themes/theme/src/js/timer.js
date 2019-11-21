$(document).ready(() => {

    const minutes = $('#minutes');
    const seconds = $('#seconds');

    window.timer = new Timer( 0, minutes, seconds );

});


class Timer {
    constructor( hours = 0, minutes = 0, seconds = 0 )
    {

        /**
         * Set hours | minutes | seconds for timer
         */
        this.hours       = hours;
        this.minutes     = minutes;
        this.seconds     = seconds;

        /**
         * Seconds
         */
        this.maxSeconds       = this.seconds.attr('data-max-time');
        this.rowSeconds       = this.seconds.find('.number-row');

        this.countSeconds     = 0;
        this.positionYSeconds = 0;

        this.timerInit( this.maxSeconds, this.rowSeconds );


        /**
         * Minutes
         */
        this.maxMinutes = this.minutes.attr('data-max-time');
        this.rowMinutes = this.minutes.find('.number-row');

        this.countMinutes     = 0;
        this.positionYMinutes = 0;

        this.timerInit( this.maxMinutes, this.rowMinutes );


        /**
         * Hours
         */
        this.maxHours = this.hours.attr('data-max-time');
        this.rowHours = this.hours.find('.number-row');

        this.countHours     = 0;
        this.positionYHours = 0;

        this.timerInit( this.maxHours, this.rowHours );
        this.timerStart();
    }


    /**
     * Initialisation all timing values
     * @param max
     * @param row
     */
    timerInit( max, row )
    {
        for ( let i = 0; i <= max; i++ ) {

            let number = i;

            if ( i < 10 ) {
                number = '0' + i;
            }

            let html = `<div class="number-block">${number}</div>`;

            row.append( html );
        }
    }


    timerStart()
    {
        setInterval( () => this.changeSeconds(), 1000);
    }

    /**
     * Changing seconds
     */
    changeSeconds()
    {

        if ( this.countSeconds > 1 ) {
            if ( this.countSeconds > 59 ) {
                this.countSeconds     = 0;
                this.positionYSeconds = 0;
                this.changeMinutes();
            }
        }

        this.changeTime( this.positionYSeconds, this.rowSeconds );

        this.countSeconds++;
        this.positionYSeconds += 77;
    }

    /**
     * Changing minutes
     */
    changeMinutes()
    {
        if ( this.maxMinutes != '' && this.maxMinutes > 0) {
            if ( this.countMinutes > 1 ) {
                if ( this.countMinutes > 59 ) {
                    this.countMinutes     = 0;
                    this.positionYMinutes = 0;
                    this.changeHours();
                }
            }

            this.changeTime( this.positionYMinutes, this.rowMinutes );

            this.countMinutes++;
            this.positionYMinutes += 77;
        }
    }

    /**
     * Changing hours
     */
    changeHours()
    {
        if ( this.maxHours != '' && this.maxHours > 0) {
            if ( this.countHours > 23 ) {
                this.countHours    = 0;
                this.hoursComplete = true;
            }

            this.changeTime( this.positionYHours, this.rowHours );

            this.countHours++;
            this.positionYHours += 69;
        }
    }


    /**
     * Change time using position by Y and row
     * @param positionY
     * @param row
     */
    changeTime( positionY, row )
    {
        row.css({
            transition: '.3s ease-in-out',
            transform: `translateY(${positionY}px)`
        });
    }
}

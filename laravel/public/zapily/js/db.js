(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.Username|| client.Username.indexOf(filter.Username) > -1)
                    && (!filter.Kelamin || client.Kelamin === filter.Kelamin)
                    && (!filter.Email || client.Email.indexOf(filter.Email) > -1)
                    && (!filter.User || client.User === filter.User);
            });
        },

        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },

        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }

    };

    window.db = db;


    db.countries = [
        { Name: "", Id: 0 },
        { Name: "Perusahaan", Id: 1 },
        { Name: "Pekerja", Id: 2 }
    ];
    db.kelamin = [
        {Name: "", Id: 0},
        {Name: "Laki-Laki", Id: 1},
        {Name: "Perempuan", Id: 2},
    ]

    db.clients = [
        {
            "Username": "Otto Clay",
            "Kelamin": 1,
            "User": 1,
            "Address": "Ap #897-1459 Quam Avenue",
        
        },
        {
            "Username": "Connor Johnston",
            "Kelamin": 2,
            "User": 2,
            "Address": "Ap #370-4647 Dis Av.",
        
        },
        {
            "Username": "Lacey Hess",
            "Kelamin": 2,
            "User": 1,
            "Address": "Ap #365-8835 Integer St.",
        
        },
        {
            "Username": "Timothy Henson",
            "Kelamin": 1,
            "User": 2,
            "Address": "911-5143 Luctus Ave",
        
        },
        {
            "Username": "Ramona Benton",
            "Kelamin": 1,
            "User": 1,
            "Address": "Ap #614-689 Vehicula Street",
                },
        {
            "Username": "Ezra Tillman",
            "Kelamin": 1,
            "User": 1,
            "Address": "P.O. Box 738, 7583 Quisque St.",
                },
        {
            "Username": "Dante Carter",
            "Kelamin": 2,
            "User": 1,
            "Address": "P.O. Box 976, 6316 Lorem, St.",
        
        },
        {
            "Username": "Christopher Mcclure",
            "Kelamin": 2,
            "User": 1,
            "Address": "847-4303 Dictum Av.",
                },
        {
            "Username": "Ruby Rocha",
            "Kelamin": 1,
            "User": 2,
            "Address": "5212 Sagittis Ave",
        
        },
        {
            "Username": "Imelda Hardin",
            "Kelamin": 1,
            "User": 2,
            "Address": "719-7009 Auctor Av.",
        
        },
        {
            "Username": "Jonah Johns",
            "Kelamin": 1,
            "User": 2,
            "Address": "P.O. Box 939, 9310 A Ave",
        
        },
        {
            "Username": "Herman Rosa",
            "Kelamin": 1,
            "User": 2,
            "Address": "718-7162 Molestie Av.",
                },
        {
            "Username": "Arthur Gay",
            "Kelamin": 2,
            "User": 2,
            "Address": "5497 Neque Street",
        
        },
        {
            "Username": "Xena Wilkerson",
            "Kelamin": 2,
            "User": 2,
            "Address": "Ap #303-6974 Proin Street",
                },
        {
            "Username": "Lilah Atkins",
            "Kelamin": 2,
            "User": 2,
            "Address": "622-8602 Gravida Ave",
                },
        {
            "Username": "Malik Shepard",
            "Kelamin": 1,
            "User": 1,
            "Address": "967-5176 Tincidunt Av.",
        
        },
        {
            "Username": "Keely Silva",
            "Kelamin": 1,
            "User": 1,
            "Address": "P.O. Box 153, 8995 Praesent Ave",
        
        },
        {
            "Username": "Hunter Pate",
            "Kelamin": 1,
            "User": 2,
            "Address": "P.O. Box 771, 7599 Ante, Road",
        
        },
        {
            "Username": "Mikayla Roach",
            "Kelamin": 1,
            "User": 2,
            "Address": "Ap #438-9886 Donec Rd.",
                },
        {
            "Username": "Upton Joseph",
            "Kelamin": 1,
            "User": 1,
            "Address": "Ap #896-7592 Habitant St.",
                },
        {
            "Username": "Jeanette Pate",
            "Kelamin": 1,
            "User": 2,
            "Address": "P.O. Box 177, 7584 Amet, St.",
        
        },
        {
            "Username": "Kaden Hernandez",
            "Kelamin": 1,
            "User": 3,
            "Address": "366 Ut St.",
                },
        {
            "Username": "Kenyon Stevens",
            "Kelamin": 1,
            "User": 3,
            "Address": "P.O. Box 704, 4580 Gravida Rd.",
        
        },
        {
            "Username": "Jerome Harper",
            "Kelamin": 1,
            "User": 5,
            "Address": "2464 Porttitor Road",
        
        },
        {
            "Username": "Jelani Patel",
            "Kelamin": 1,
            "User": 2,
            "Address": "P.O. Box 541, 5805 Nec Av.",
                },
        {
            "Username": "Keaton Oconnor",
            "Kelamin": 1,
            "User": 1,
            "Address": "Ap #657-1093 Nec, Street",
        
        },
        {
            "Username": "Bree Johnston",
            "Kelamin": 1,
            "User": 2,
            "Address": "372-5942 Vulputate Avenue",
        
        },
        {
            "Username": "Maisie Hodges",
            "Kelamin": 1,
            "User": 7,
            "Address": "P.O. Box 445, 3880 Odio, Rd.",
        
        },
        {
            "Username": "Kuame Calhoun",
            "Kelamin": 1,
            "User": 2,
            "Address": "P.O. Box 609, 4105 Rutrum St.",
                },
        {
            "Username": "Carlos Cameron",
            "Kelamin": 1,
            "User": 5,
            "Address": "Ap #215-5386 A, Avenue",
        
        },
        {
            "Username": "Fulton Parsons",
            "Kelamin": 1,
            "User": 7,
            "Address": "P.O. Box 523, 3705 Sed Rd.",
        
        },
        {
            "Username": "Wallace Christian",
            "Kelamin": 1,
            "User": 3,
            "Address": "416-8816 Mauris Avenue",
                },
        {
            "Username": "Caryn Maldonado",
            "Kelamin": 1,
            "User": 1,
            "Address": "108-282 Nonummy Ave",
        
        },
        {
            "Username": "Whilemina Frank",
            "Kelamin": 1,
            "User": 7,
            "Address": "P.O. Box 681, 3938 Egestas. Av.",
                },
        {
            "Username": "Emery Moon",
            "Kelamin": 1,
            "User": 4,
            "Address": "Ap #717-8556 Non Road",
                },
        {
            "Username": "Price Watkins",
            "Kelamin": 1,
            "User": 4,
            "Address": "832-7810 Nunc Rd.",
        
        },
        {
            "Username": "Lydia Castillo",
            "Kelamin": 1,
            "User": 7,
            "Address": "5280 Placerat, Ave",
                },
        {
            "Username": "Lawrence Conway",
            "Kelamin": 1,
            "User": 1,
            "Address": "Ap #452-2808 Imperdiet St.",
        
        },
        {
            "Username": "Kalia Nicholson",
            "Kelamin": 1,
            "User": 5,
            "Address": "P.O. Box 871, 3023 Tellus Road",
                },
        {
            "Username": "Brielle Baxter",
            "Kelamin": 1,
            "User": 3,
            "Address": "Ap #822-9526 Ut, Road",
                },
        {
            "Username": "Valentine Brady",
            "Kelamin": 1,
            "User": 7,
            "Address": "8014 Enim. Road",
                },
        {
            "Username": "Rebecca Gardner",
            "Kelamin": 1,
            "User": 4,
            "Address": "8655 Arcu. Road",
                },
        {
            "Username": "Vladimir Tate",
            "Kelamin": 1,
            "User": 1,
            "Address": "130-1291 Non, Rd.",
                },
        {
            "Username": "Vernon Hays",
            "Kelamin": 1,
            "User": 4,
            "Address": "964-5552 In Rd.",
                },
        {
            "Username": "Allegra Hull",
            "Kelamin": 1,
            "User": 4,
            "Address": "245-8891 Donec St.",
                },
        {
            "Username": "Hu Hendrix",
            "Kelamin": 1,
            "User": 7,
            "Address": "428-5404 Tempus Ave",
                },
        {
            "Username": "Kenyon Battle",
            "Kelamin": 1,
            "User": 2,
            "Address": "921-6804 Lectus St.",
        
        },
        {
            "Username": "Gloria Nielsen",
            "Kelamin": 1,
            "User": 4,
            "Address": "Ap #275-4345 Lorem, Street",
                },
        {
            "Username": "Illiana Kidd",
            "Kelamin": 1,
            "User": 2,
            "Address": "7618 Lacus. Av.",
        
        },
        {
            "Username": "Adria Todd",
            "Kelamin": 1,
            "User": 6,
            "Address": "1889 Tincidunt Road",
        
        },
        {
            "Username": "Kirsten Mayo",
            "Kelamin": 1,
            "User": 1,
            "Address": "100-8640 Orci, Avenue",
        
        },
        {
            "Username": "Willa Hobbs",
            "Kelamin": 1,
            "User": 6,
            "Address": "P.O. Box 323, 158 Tristique St.",
        
        },
        {
            "Username": "Alexis Clements",
            "Kelamin": 1,
            "User": 5,
            "Address": "P.O. Box 176, 5107 Proin Rd.",
        
        },
        {
            "Username": "Akeem Conrad",
            "Kelamin": 1,
            "User": 2,
            "Address": "282-495 Sed Ave",
                },
        {
            "Username": "Montana Silva",
            "Kelamin": 1,
            "User": 6,
            "Address": "P.O. Box 120, 9766 Consectetuer St.",
        
        },
        {
            "Name": "Kaseem Hensley",
            "Kelamin": 1,
            "User": 6,
            "Address": "Ap #510-8903 Mauris. Av.",
                },
        {
            "Name": "Christopher Morton",
            "Kelamin": 1,
            "User": 5,
            "Address": "P.O. Box 234, 3651 Sodales Avenue",
        
        },
        {
            "Name": "Wade Fernandez",
            "Kelamin": 1,
            "User": 6,
            "Address": "740-5059 Dolor. Road",
                },
        {
            "Name": "Illiana Kirby",
            "Kelamin": 1,
            "User": 2,
            "Address": "527-3553 Mi Ave",
        
        },
        {
            "Name": "Kimberley Hurley",
            "Kelamin": 1,
            "User": 5,
            "Address": "P.O. Box 637, 9915 Dictum St.",
        
        },
        {
            "Name": "Arthur Olsen",
            "Kelamin": 1,
            "User": 5,
            "Address": "887-5080 Eget St.",
        
        },
        {
            "Name": "Brody Potts",
            "Kelamin": 1,
            "User": 2,
            "Address": "Ap #577-7690 Sem Road",
        
        },
        {
            "Name": "Dillon Ford",
            "Kelamin": 1,
            "User": 1,
            "Address": "Ap #885-9289 A, Av.",
                },
        {
            "Name": "Hannah Juarez",
            "Kelamin": 1,
            "User": 2,
            "Address": "4744 Sapien, Rd.",
                },
        {
            "Name": "Vincent Shaffer",
            "Kelamin": 1,
            "User": 2,
            "Address": "9203 Nunc St.",
                },
        {
            "Name": "George Holt",
            "Kelamin": 1,
            "User": 6,
            "Address": "4162 Cras Rd.",
        
        },
        {
            "Name": "Tobias Bartlett",
            "Kelamin": 1,
            "User": 4,
            "Address": "792-6145 Mauris St.",
                },
        {
            "Name": "Xavier Hooper",
            "Kelamin": 1,
            "User": 1,
            "Address": "879-5026 Interdum. Rd.",
        
        },
        {
            "Name": "Declan Dorsey",
            "Kelamin": 1,
            "User": 2,
            "Address": "Ap #926-4171 Aenean Road",
                },
        {
            "Name": "Clementine Tran",
            "Kelamin": 1,
            "User": 4,
            "Address": "P.O. Box 176, 9865 Eu Rd.",
                },
        {
            "Name": "Pamela Moody",
            "Kelamin": 1,
            "User": 6,
            "Address": "622-6233 Luctus Rd.",
                },
        {
            "Name": "Julie Leon",
            "Kelamin": 1,
            "User": 6,
            "Address": "Ap #915-6782 Sem Av.",
                },
        {
            "Name": "Shana Nolan",
            "Kelamin": 1,
            "User": 5,
            "Address": "P.O. Box 603, 899 Eu St.",
        
        },
        {
            "Name": "Vaughan Moody",
            "Kelamin": 1,
            "User": 5,
            "Address": "880 Erat Rd.",
        
        },
        {
            "Name": "Randall Reeves",
            "Kelamin": 1,
            "User": 3,
            "Address": "1819 Non Street",
        
        },
        {
            "Name": "Dominic Raymond",
            "Kelamin": 1,
            "User": 1,
            "Address": "Ap #689-4874 Nisi Rd.",
                },
        {
            "Name": "Lev Pugh",
            "Kelamin": 1,
            "User": 5,
            "Address": "Ap #433-6844 Auctor Avenue",
                },
        {
            "Name": "Desiree Hughes",
            "Kelamin": 1,
            "User": 4,
            "Address": "605-6645 Fermentum Avenue",
                },
        {
            "Name": "Idona Oneill",
            "Kelamin": 1,
            "User": 7,
            "Address": "751-8148 Aliquam Avenue",
                },
        {
            "Name": "Lani Mayo",
            "Kelamin": 1,
            "User": 1,
            "Address": "635-2704 Tristique St.",
                },
        {
            "Name": "Cathleen Bonner",
            "Kelamin": 1,
            "User": 1,
            "Address": "916-2910 Dolor Av.",
        
        },
        {
            "Name": "Sydney Murray",
            "Kelamin": 1,
            "User": 5,
            "Address": "835-2330 Fringilla St.",
        
        },
        {
            "Name": "Brenna Rodriguez",
            "Kelamin": 1,
            "User": 6,
            "Address": "3687 Imperdiet Av.",
                },
        {
            "Name": "Alfreda Mcdaniel",
            "Kelamin": 1,
            "User": 7,
            "Address": "745-8221 Aliquet Rd.",
                },
        {
            "Name": "Zachery Atkins",
            "Kelamin": 1,
            "User": 1,
            "Address": "549-2208 Auctor. Road",
                },
        {
            "Name": "Amelia Rich",
            "Kelamin": 1,
            "User": 4,
            "Address": "P.O. Box 734, 4717 Nunc Rd.",
        
        },
        {
            "Name": "Kiayada Witt",
            "Kelamin": 1,
            "User": 3,
            "Address": "Ap #735-3421 Malesuada Avenue",
        
        },
        {
            "Name": "Lysandra Pierce",
            "Kelamin": 1,
            "User": 1,
            "Address": "Ap #146-2835 Curabitur St.",
                },
        {
            "Name": "Cara Rios",
            "Kelamin": 1,
            "User": 4,
            "Address": "Ap #562-7811 Quam. Ave",
                },
        {
            "Name": "Austin Andrews",
            "Kelamin": 1,
            "User": 7,
            "Address": "P.O. Box 274, 5505 Sociis Rd.",
        
        },
        {
            "Name": "Lillian Peterson",
            "Kelamin": 1,
            "User": 2,
            "Address": "6212 A Avenue",
        
        },
        {
            "Name": "Adria Beach",
            "Kelamin": 1,
            "User": 2,
            "Address": "P.O. Box 183, 2717 Nunc Avenue",
                },
        {
            "Name": "Oleg Durham",
            "Kelamin": 1,
            "User": 4,
            "Address": "931-3208 Nunc Rd.",
        
        },
        {
            "Name": "Casey Reese",
            "Kelamin": 1,
            "User": 4,
            "Address": "383-3675 Ultrices, St.",
        
        },
        {
            "Name": "Kane Burnett",
            "Kelamin": 1,
            "User": 1,
            "Address": "759-8212 Dolor. Ave",
        
        },
        {
            "Name": "Stewart Wilson",
            "Kelamin": 1,
            "User": 7,
            "Address": "718-7845 Sagittis. Av.",
        
        },
        {
            "Name": "Charity Holcomb",
            "Kelamin": 1,
            "User": 6,
            "Address": "641-7892 Enim. Ave",
        
        },
        {
            "Name": "Kyra Cummings",
            "Kelamin": 1,
            "User": 4,
            "Address": "P.O. Box 702, 6621 Mus. Av.",
        
        },
        {
            "Name": "Stuart Wallace",
            "Kelamin": 1,
            "User": 7,
            "Address": "648-4990 Sed Rd.",
                },
        {
            "Name": "Carter Clarke",
            "Kelamin": 1,
            "User": 6,
            "Address": "Ap #547-2921 A Street",
        
        }
    ];

    db.users = [
        {
            "ID": "x",
            "Account": "A758A693-0302-03D1-AE53-EEFE22855556",
            "Name": "Carson Kelley",
            "RegisterDate": "2002-04-20T22:55:52-07:00"
        },
        {
            "Account": "D89FF524-1233-0CE7-C9E1-56EFF017A321",
            "Name": "Prescott Griffin",
            "RegisterDate": "2011-02-22T05:59:55-08:00"
        },
        {
            "Account": "06FAAD9A-5114-08F6-D60C-961B2528B4F0",
            "Name": "Amir Saunders",
            "RegisterDate": "2014-08-13T09:17:49-07:00"
        },
        {
            "Account": "EED7653D-7DD9-A722-64A8-36A55ECDBE77",
            "Name": "Derek Thornton",
            "RegisterDate": "2012-02-27T01:31:07-08:00"
        },
        {
            "Account": "2A2E6D40-FEBD-C643-A751-9AB4CAF1E2F6",
            "Name": "Fletcher Romero",
            "RegisterDate": "2010-06-25T15:49:54-07:00"
        },
        {
            "Account": "3978F8FA-DFF0-DA0E-0A5D-EB9D281A3286",
            "Name": "Thaddeus Stein",
            "RegisterDate": "2013-11-10T07:29:41-08:00"
        },
        {
            "Account": "658DBF5A-176E-569A-9273-74FB5F69FA42",
            "Name": "Nash Knapp",
            "RegisterDate": "2005-06-24T09:11:19-07:00"
        },
        {
            "Account": "76D2EE4B-7A73-1212-F6F2-957EF8C1F907",
            "Name": "Quamar Vega",
            "RegisterDate": "2011-04-13T20:06:29-07:00"
        },
        {
            "Account": "00E46809-A595-CE82-C5B4-D1CAEB7E3E58",
            "Name": "Philip Galloway",
            "RegisterDate": "2008-08-21T18:59:38-07:00"
        },
        {
            "Account": "C196781C-DDCC-AF83-DDC2-CA3E851A47A0",
            "Name": "Mason French",
            "RegisterDate": "2000-11-15T00:38:37-08:00"
        },
        {
            "Account": "5911F201-818A-B393-5888-13157CE0D63F",
            "Name": "Ross Cortez",
            "RegisterDate": "2010-05-27T17:35:32-07:00"
        },
        {
            "Account": "B8BB78F9-E1A1-A956-086F-E12B6FE168B6",
            "Name": "Logan King",
            "RegisterDate": "2003-07-08T16:58:06-07:00"
        },
        {
            "Account": "06F636C3-9599-1A2D-5FD5-86B24ADDE626",
            "Name": "Cedric Leblanc",
            "RegisterDate": "2011-06-30T14:30:10-07:00"
        },
        {
            "Account": "FE880CDD-F6E7-75CB-743C-64C6DE192412",
            "Name": "Simon Sullivan",
            "RegisterDate": "2013-06-11T16:35:07-07:00"
        },
        {
            "Account": "BBEDD673-E2C1-4872-A5D3-C4EBD4BE0A12",
            "Name": "Jamal West",
            "RegisterDate": "2001-03-16T20:18:29-08:00"
        },
        {
            "Account": "19BC22FA-C52E-0CC6-9552-10365C755FAC",
            "Name": "Hector Morales",
            "RegisterDate": "2012-11-01T01:56:34-07:00"
        },
        {
            "Account": "A8292214-2C13-5989-3419-6B83DD637D6C",
            "Name": "Herrod Hart",
            "RegisterDate": "2008-03-13T19:21:04-07:00"
        },
        {
            "Account": "0285564B-F447-0E7F-EAA1-7FB8F9C453C8",
            "Name": "Clark Maxwell",
            "RegisterDate": "2004-08-05T08:22:24-07:00"
        },
        {
            "Account": "EA78F076-4F6E-4228-268C-1F51272498AE",
            "Name": "Reuben Walter",
            "RegisterDate": "2011-01-23T01:55:59-08:00"
        },
        {
            "Account": "6A88C194-EA21-426F-4FE2-F2AE33F51793",
            "Name": "Ira Ingram",
            "RegisterDate": "2008-08-15T05:57:46-07:00"
        },
        {
            "Account": "4275E873-439C-AD26-56B3-8715E336508E",
            "Name": "Damian Morrow",
            "RegisterDate": "2015-09-13T01:50:55-07:00"
        },
        {
            "Account": "A0D733C4-9070-B8D6-4387-D44F0BA515BE",
            "Name": "Macon Farrell",
            "RegisterDate": "2011-03-14T05:41:40-07:00"
        },
        {
            "Account": "B3683DE8-C2FA-7CA0-A8A6-8FA7E954F90A",
            "Name": "Joel Galloway",
            "RegisterDate": "2003-02-03T04:19:01-08:00"
        },
        {
            "Account": "01D95A8E-91BC-2050-F5D0-4437AAFFD11F",
            "Name": "Rigel Horton",
            "RegisterDate": "2015-06-20T11:53:11-07:00"
        },
        {
            "Account": "F0D12CC0-31AC-A82E-FD73-EEEFDBD21A36",
            "Name": "Sylvester Gaines",
            "RegisterDate": "2004-03-12T09:57:13-08:00"
        },
        {
            "Account": "874FCC49-9A61-71BC-2F4E-2CE88348AD7B",
            "Name": "Abbot Mckay",
            "RegisterDate": "2008-12-26T20:42:57-08:00"
        },
        {
            "Account": "B8DA1912-20A0-FB6E-0031-5F88FD63EF90",
            "Name": "Solomon Green",
            "RegisterDate": "2013-09-04T01:44:47-07:00"
        }
     ];

}());
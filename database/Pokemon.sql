create table breeding
(
    Egg_Groups varchar(250) not null,
    Gender     varchar(60)  not null,
    Egg_Cycles varchar(55)  not null
);

create table moves
(
    ID     int          not null
        primary key,
    Name   varchar(25)  not null,
    Type   varchar(60)  not null,
    Cat    varchar(30)  not null,
    Power  int          not null,
    Acc    int          not null,
    Pp     int          not null,
    Effect varchar(512) not null
);

create table pokemon
(
    Id            int auto_increment
        primary key,
    Nama          varchar(250) not null,
    Type          varchar(55)  not null,
    Species       varchar(60)  not null,
    Height        varchar(75)  not null,
    Weight        varchar(100) not null,
    Chenges       varchar(60)  not null,
    Attack        int          not null,
    Health_Point  int          not null,
    Speed         int          not null,
    Speed_Attack  int          not null,
    Speed_Defense int          not null
);

create table abilities
(
    Id         int auto_increment
        primary key,
    pokemon_id int          not null,
    Nama       varchar(250) not null,
    effect     varchar(250) not null,
    constraint abilities_ibfk_1
        foreign key (pokemon_id) references pokemon (Id)
);

create index pokemon_id
    on abilities (pokemon_id);

create table egg_moves
(
    ID         int          not null,
    pokemon_id int          not null,
    Move       varchar(120) not null,
    Type       varchar(60)  not null,
    Cat        varchar(40)  not null,
    Power      int          not null,
    Acc        int          not null,
    constraint egg_moves_ibfk_1
        foreign key (pokemon_id) references pokemon (Id)
);

create index pokemon_id
    on egg_moves (pokemon_id);

create index Id
    on pokemon (Id);

create table training
(
    Ev_Yield        varchar(120) not null,
    Catch_Rate      varchar(55)  not null,
    Base_Friendship varchar(55)  not null,
    Base_Exp        int          not null,
    Growth_Rate     varchar(55)  not null,
    pokemon_id      int          not null,
    constraint training_pokemon_Id_fk
        foreign key (pokemon_id) references pokemon (Id)
);

create table type_defense
(
    ID         int auto_increment
        primary key,
    Power      varchar(60) not null,
    Point      float       not null,
    pokemon_id int         not null,
    constraint type_defense_pokemon_Id_fk
        foreign key (pokemon_id) references pokemon (Id)
);


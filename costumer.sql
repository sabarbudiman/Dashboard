/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     25/04/2021 14:57:55                          */
/*==============================================================*/


drop table if exists COSTUMER;

drop table if exists MEMBELI;

drop table if exists TIKET;

/*==============================================================*/
/* Table: COSTUMER                                              */
/*==============================================================*/
create table COSTUMER
(
   ID_CST               int not null,
   NAMA_CST             char(25),
   ALAMAT_CST           char(50),
   primary key (ID_CST)
);

/*==============================================================*/
/* Table: MEMBELI                                               */
/*==============================================================*/
create table MEMBELI
(
   ID_CST               int not null,
   ID_TIKET             int not null,
   primary key (ID_CST, ID_TIKET)
);

/*==============================================================*/
/* Table: TIKET                                                 */
/*==============================================================*/
create table TIKET
(
   ID_TIKET             int not null,
   TUJUAN               char(12),
   HARGA                numeric(10,0),
   TANGGAL              date,
   primary key (ID_TIKET)
);

alter table MEMBELI add constraint FK_MEMBELI foreign key (ID_CST)
      references COSTUMER (ID_CST) on delete restrict on update restrict;

alter table MEMBELI add constraint FK_MEMBELI2 foreign key (ID_TIKET)
      references TIKET (ID_TIKET) on delete restrict on update restrict;


tableextension 50104 "Sales Cr.Memo Header Ext" extends "Sales Cr.Memo Header"
{
    fields
    {
        field(50100; "Deal Name"; Text[250])
        {
            Caption = 'Deal Name';
            DataClassification = ToBeClassified;
        }
        field(50101; "Service Period"; Text[250])
        {
            Caption = 'Service Period';
            DataClassification = ToBeClassified;
        }
        field(50102; "Remark 1"; Text[250])
        {
            Caption = 'Remark 1';
            DataClassification = ToBeClassified;
        }
        field(50103; "Remark 2"; Text[250])
        {
            Caption = 'Remark 2';
            DataClassification = ToBeClassified;
        }
    }
}

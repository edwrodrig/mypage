{
    "title": {
        "en": "Cast signal in new C++11 Qt connection"
    },
    "description": {
        "en": "Cast signal in new C++11 Qt connection"
    },
    "date": "2017-02-09",
    "tags": []
}
---

<p>This is the template</p>
<pre>
<?=htmlentities(<<<'EOF'
static_cast<return_type(ClassName::*)(arg_type1, arg_type2)>
EOF
)?>
</pre>

<p>Example</p>
<pre>
<?=htmlentities(<<<'EOF'
static_cast<void (QComboBox::*)(const QString &)>(&QComboBox::activated)
EOF
)?>
</pre>

<p>Full example</p>

<pre>
<?=htmlentities(<<<'EOF'
connect(ui->comboBox, 
        static_cast<void (QComboBox::*)(const QString &)>(&QComboBox::activated),
        ps,
        &PlotSystem::requestPlotsAvailable);
EOF
)?>
</pre>
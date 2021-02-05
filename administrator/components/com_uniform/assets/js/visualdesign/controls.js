

/* FREE */


define([],
    function (JSNVisualDesign) {
        return function (JSNVisualDesign, language) {
            /* Standard Group */
            //Single line text controls
            JSNVisualDesign.register('single-line-text', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_SINGLE_LINE_TEXT'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_SINGLE_LINE_TEXT'],
                    instruction:'',
                    required:0,
                    limitation:0,
                    limitMin:0,
                    limitMax:0,
                    limitType:'Words',
                    size:'jsn-input-medium-fluid',
                    value:'',
                    validPattern: '',
                    validSample: ''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION'],
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',

                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                }

                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        value:{
                            type:'text',
                            label:language['JSN_UNIFORM_PREDEFINED_VALUE']
                        },

                        // Validation rule.
                        validPattern: {
                            type: 'text',
                            label: language['JSN_UNIFORM_VALID_PATTERN'],
                            attrs: {
                                placeholder: 'e.g. \\(\\d{1,3}\\) \\d\\d\\d\\d-\\d\\d\\d\\d'
                            },
                            append: {
                                text: language['JSN_UNIFORM_VALID_TEST'],
                                onClick: "var field = document.getElementById('option-validPattern-text'); if (field.value != '') { try { ''.match(new RegExp(field.value)); alert('" + language['JSN_UNIFORM_VALID_PATTERN_CORRECT'] + "'); } catch (e) { alert(e); } } else alert('" + language['JSN_UNIFORM_VALID_INPUT_PATTERN'] + "');"
                            }
                        },
                        validSample: {
                            type: 'text',
                            label: language['JSN_UNIFORM_VALID_SAMPLE'],
                            attrs: {
                                placeholder: 'e.g. (1) 2345-6789'
                            },
                            append: {
                                text: language['JSN_UNIFORM_VALID_TEST'],
                                onClick: "var field = document.getElementById('option-validSample-text'); if (field.value != '' && document.getElementById('option-validPattern-text').value != '') { try { if (field.value.match(new RegExp(document.getElementById('option-validPattern-text').value))) alert('" + language['JSN_UNIFORM_VALID_SAMPLE_MATCHS'] + "'); else alert('" + language['JSN_UNIFORM_VALID_SAMPLE_DOES_NOT_MATCH'] + "'); } catch (e) { alert(e); } } else alert('" + language['JSN_UNIFORM_VALID_INPUT_SAMPLE'] + "');"
                            }
                        },

                        limit:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><limitation/><limitMin/><limitMax/><limitType/></div>',
                            elements:{
                                limitation:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_LIMIT_TEXT']
                                },
                                limitMin:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_WITHIN'],
                                    validate:['number']
                                },
                                limitMax:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_AND'],
                                    validate:['number']
                                },
                                limitType:{
                                    type:'select',
                                    options:{
                                        'Words':language['JSN_UNIFORM_WORDS'],
                                        'Characters':language['JSN_UNIFORM_CHARACTERS']
                                    },
                                    attrs:{
                                        'class':'input-small'
                                    }
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><input type="text" placeholder="${value}" class="${size}"/></div></div>'
            });
            // Choices controls
            JSNVisualDesign.register('choices', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_MULTIPLE_CHOICE'],
                elmtitle:language['JSN_UNIFORM_MULTIPLE_CHOICE_ELEMENT_DESCRIPTION_LABEL'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_MULTIPLE_CHOICE'],
                    instruction:'',
                    required:0,
                    randomize:0,
                    labelOthers:language['JSN_UNIFORM_OTHERS'],
                    layout:'columns-count-one',
                    items:[
                        {
                            text:'Choice 1',
                            checked:true
                        },
                        {
                            text:'Choice 2',
                            checked:false
                        },
                        {
                            text:'Choice 3',
                            checked:false
                        }
                    ],
                    value:''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><layout/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                layout:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_LAYOUT'],
                                    options:{
                                        'jsn-columns-count-one':language['JSN_UNIFORM_ONE_COLUMN'],
                                        'jsn-columns-count-two':language['JSN_UNIFORM_TWO_COLUMN'],
                                        'jsn-columns-count-three':language['JSN_UNIFORM_THREE_COLUMN'],
                                        'jsn-columns-count-no':language['JSN_UNIFORM_SIDE_BY_SIDE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        items:{
                            type:'itemlist',
                            label:language['JSN_UNIFORM_ITEMS'],
                            actionField:true,
                            multipleCheck:false
                        },
                        itemAction:{
                            type:'hidden'
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><div class="control-group {{if hideField}}jsn-hidden-field{{/if}}"><div class="controls jsn-allow-other"><allowOther/><labelOthers/></div></div></div><div class="pull-right"><randomize/></div><div class="clearbreak"></div></div>',
                            elements:{
                                allowOther:{
                                    type:'checkbox',
                                    field:'allowOther',
                                    label:language['JSN_UNIFORM_ALLOW_USER_CHOICE']
                                },
                                labelOthers:{
                                    type:'_text',
                                    field:'allowOther',
                                    attrs:{
                                        'class':'text jsn-input-small-fluid'
                                    }
                                },
                                randomize:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_RANDOMIZE_ITEMS']
                                }
                            }
                        }

                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><div class="jsn-columns-container ${layout}">{{each(i, val) items}}<div class="jsn-column-item"><label class="radio"><input name="${identify}" type="radio" {{if val.checked == true || val.checked=="true"}}checked{{/if}} />#{val.text}</label></div>{{/each}}{{if allowOther}}<div class="jsn-column-item"><label class="radio lbl-allowOther"><input class="allowOther" value="Others" type="radio" />${labelOthers}</label><textarea rows="3"></textarea></div>{{/if}}<div class="clearbreak"></div></div></div></div>'
            });
            //dropdown controls
            JSNVisualDesign.register('dropdown', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_DROPDOWN'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_DROPDOWN'],
                    instruction:'',
                    required:0,
                    labelOthers:language['JSN_UNIFORM_OTHERS'],
                    size:'jsn-input-fluid',
                    items:[
                        {
                        	text:'- Select Value -',
                            checked:true
                        },
                        {
                        	text:'Value 1',
                            checked:false
                        },
                        {
                        	text:'Value 2',
                            checked:false
                        },
                        {
                        	text:'Value 3',
                            checked:false
                        }
                    ],
                    value:''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        inputsize:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-fluid':language['JSN_UNIFORM_AUTO'],
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        items:{
                            type:'itemlist',
                            label:language['JSN_UNIFORM_ITEMS'],
                            actionField:true,
                            multipleCheck:false
                        },
                        itemAction:{
                            type:'hidden'
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><div class="control-group {{if hideField}}jsn-hidden-field{{/if}}"><div class="controls jsn-allow-other"><allowOther/><labelOthers/></div></div></div><div class="pull-right"><randomize/></div><div class="clearbreak"></div></div><div class="jsn-form-bar"><div class="pull-left"><firstItemAsPlaceholder/></div><div class="clearbreak"></div></div>',
                            elements:{
                                allowOther:{
                                    type:'checkbox',
                                    field:'allowOther',
                                    label:language['JSN_UNIFORM_ALLOW_USER_CHOICE']
                                },
                                labelOthers:{
                                    type:'_text',
                                    field:'allowOther',
                                    attrs:{
                                        'class':'text jsn-input-small-fluid'
                                    }
                                },
                                randomize:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_RANDOMIZE_ITEMS']
                                },
                                firstItemAsPlaceholder:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_SET_ITEM_PLACEHOLDER']
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><select class="${size}" >{{each(i, val) items}}<option value="${val.text}" {{if val.checked == true || val.checked=="true"}}selected{{/if}}>${val.text}</option>{{/each}}</select></div></div>'
            });
            // Paragraph Text controls
            JSNVisualDesign.register('paragraph-text', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_PARAGRAPH_TEXT'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_PARAGRAPH_TEXT'],
                    instruction:'',
                    required:0,
                    limitation:0,
                    limitMin:0,
                    limitMax:0,
                    rows:8,
                    size:'jsn-input-xlarge-fluid',
                    limitType:'Words',
                    value:''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><rows/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                rows:{
                                    type:'number',
                                    label: language['JSN_UNIFORM_ROWS'],
                                    validate:['number']
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        value:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            attrs:{
                                'rows':'10'
                            }
                        },
                        limit:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><limitation/><limitMin/><limitMax/><limitType/></div>',
                            elements:{
                                limitation:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_LIMIT_TEXT']
                                },
                                limitMin:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_WITHIN'],
                                    validate:['number']
                                },
                                limitMax:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_AND'],
                                    validate:['number']
                                },
                                limitType:{
                                    type:'select',
                                    options:{
                                        'Words':language['JSN_UNIFORM_WORDS'],
                                        'Characters':language['JSN_UNIFORM_CHARACTERS']
                                    },
                                    attrs:{
                                        'class':'input-small'
                                    }
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><textarea class="${size}" rows="${rows}" placeholder="${value}"></textarea></div></div>'
            });
            /*  Checkboxes control */
            JSNVisualDesign.register('checkboxes', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_CHECKBOXES'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_CHECKBOXES'],
                    instruction:'',
                    required:0,
                    randomize:0,
                    allowOther:0,
                    limitation:0,
                    limitMax:0,
                    layout:'columns-count-one',
                    labelOthers:language['JSN_UNIFORM_OTHERS'],
                    items:[
                        {
                        	text:'Checkbox 1',
                            checked:false
                        },
                        {
                        	text:'Checkbox 2',
                            checked:false
                        },
                        {
                        	text:'Checkbox 3',
                            checked:false
                        }
                    ],
                    value:''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><layout/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                layout:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_LAYOUT'],
                                    options:{
                                        'jsn-columns-count-one':language['JSN_UNIFORM_ONE_COLUMN'],
                                        'jsn-columns-count-two':language['JSN_UNIFORM_TWO_COLUMN'],
                                        'jsn-columns-count-three':language['JSN_UNIFORM_THREE_COLUMN'],
                                        'jsn-columns-count-no':language['JSN_UNIFORM_SIDE_BY_SIDE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                }
                            }
                        },
                        limit:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><limitation/><limitMax/></div>',
                            elements:{
                                limitation:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_LIMIT_CHOICES']
                                },
                                limitMax:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_WITHIN'],
                                    validate:['number']
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        items:{
                            type:'itemlist',
                            label:language['JSN_UNIFORM_ITEMS'],
                            actionField:true,
                            multipleCheck:true
                        },
                        itemAction:{
                            type:'hidden'
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><div class="control-group {{if hideField}}jsn-hidden-field{{/if}}"><div class="controls jsn-allow-other"><allowOther/><labelOthers/></div></div></div><div class="pull-right"><randomize/></div><div class="clearbreak"></div></div>',
                            elements:{
                                allowOther:{
                                    type:'checkbox',
                                    field:'allowOther',
                                    label:language['JSN_UNIFORM_ALLOW_USER_CHOICE']
                                },
                                labelOthers:{
                                    type:'_text',
                                    field:'allowOther',
                                    attrs:{
                                        'class':'text jsn-input-small-fluid'
                                    }
                                },
                                randomize:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_RANDOMIZE_ITEMS']
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><div class="jsn-columns-container ${layout}">{{each(i, val) items}}<div class="jsn-column-item"><label class="checkbox"><input type="checkbox" {{if val.checked == true || val.checked == "true"}}checked{{/if}} />#{val.text}</label></div>{{/each}}{{if allowOther==true || allowOther=="true"}}<div class="jsn-column-item"><label class="checkbox lbl-allowOther"><input class="allowOther" value="Others" type="checkbox" />${labelOthers}</label><textarea rows="3"></textarea></div>{{/if}}<div class="clearbreak"></div></div></div></div>'
            });
            //List controls
            JSNVisualDesign.register('list', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_LIST'],
                elmtitle:language['JSN_UNIFORM_LIST_ELEMENT_DESCRIPTION_LABEL'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_LIST'],
                    instruction:'',
                    required:0,
                    size:'jsn-input-fluid',
                    items:[
                        {
                        	text:'Value 1',
                            checked:false
                        },
                        {
                        	text:'Value 2',
                            checked:false
                        },
                        {
                        	text:'Value 3',
                            checked:false
                        }
                    ],
                    value:''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        inputsize:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-fluid':language['JSN_UNIFORM_AUTO'],
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        items:{
                            type:'itemlist',
                            label:language['JSN_UNIFORM_ITEMS'],
                            actionField:false,
                            multipleCheck:true
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><multiple/></div><div class="pull-right"><randomize/></div><div class="clearbreak"></div></div>',
                            elements:{
                                multiple:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_ALLOW_MULTIPLE_SELECTION']
                                },
                                randomize:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_RANDOMIZE_ITEMS']
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><select multiple class="${size}" >{{each(i, val) items}}<option value="${val.text}" {{if val.checked == true || val.checked=="true"}}selected{{/if}}>${val.text}</option>{{/each}}</select></div></div>'
            });
            /* End Standard Group */
            /*Static content controls*/
            JSNVisualDesign.register('static-content', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_STATIC_CONTENT'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_STATIC_CONTENT'],
                    value:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fermentum odio sed ipsum fringilla ut tempor magna accumsan. Aliquam erat volutpat. Vestibulum euismod ipsum non risus dignissim hendrerit. Nam metus arcu, blandit in cursus nec, placerat vitae arcu. Maecenas ornare porta mi, et tincidunt nulla luctus non.”',
                    showInNotificationEmail:'Yes'
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        value:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_MESSAGES_TEXT'],
                            attrs:{
                                'rows':'6'
                            }
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><hideField/></div><div class="clearbreak"></div></div>',
                            elements:{
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                }
                            }
                        }
                    },
                    values:{
                        extraShowInNotificationEmail:{
                            type:'group',
                            decorator:'<div class="form-inline"><showInNotificationEmail/><div>',
                            title:language['JSN_UNIFORM_ENABLE_SHOW_IN_NOTIFICATION_EMAIL'],
                            elements:{
                                showInNotificationEmail:{
                                    type:'radio',
                                    label:language['JSN_UNIFORM_ENABLE_SHOW_IN_NOTIFICATION_EMAIL'],
                                    options:{
                                        'Yes':'Yes',
                                        'No':'No'
                                    }
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}</label><div class="controls clearfix">{{html value}}</div></div>'
            });
            /* End Static content controls*/
            /*Google Maps controls*/
            JSNVisualDesign.register('google-maps', {
                caption:language['JSN_UNIFORM_GOOGLE_MAPS'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_GOOGLE_MAPS'],
                    width:100,
                    formatWidth:'%',
                    height:300,
                    googleMaps:'{\"center\":{\"lb\":40.7055693237497,\"mb\":-93.4507375506871},\"zoom\":3}'
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="row-fluid"><div class="pull-left"><div class="control-group"><label for="option-width-number" class="control-label">Width</label><div class="controls input-append"><width/><formatWidth/></div></div></div><div class="pull-right"><div class="control-group"><label for="option-width-number" class="control-label">Height</label><div class="controls input-append"><height/><span class="add-on">px</span></div></div></div></div><div class="jsn-form-bar"><div class="pull-left"><hideField/></div><div class="clearbreak"></div></div>',
                            elements:{
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },

                                width:{
                                    type:'number',
                                    group:'horizontal',
                                    field:'input-inline',
                                    attrs:{
                                        'class':'number input-small'
                                    }
                                },
                                formatWidth:{
                                    type:'select',
                                    group:'horizontal',
                                    field:'input-inline',
                                    options:{
                                        '%':'%',
                                        'px':'px'
                                    },
                                    attrs:{
                                        'class':'add-on input-mini'
                                    }
                                },
                                height:{
                                    type:'number',
                                    group:'horizontal',
                                    field:'input-inline',
                                    attrs:{
                                        'class':'number input-small'
                                    }
                                }

                            }
                        }
                    },
                    values:{
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><div id="google-maps-search"><div class="jsn-search-google-maps"><input id="places-search" placeholder="Search…" class="input search-query btn-icon input-xlarge" type="text"/><a href="javascript:void(0);" title="Clear Search" class="jsn-reset-search"><i class="icon-remove"></i></a></div></div></div><div class="pull-right"><div class="btn-group"><button type="button" class="btn btn-google-location btn-icon"><i class="icon-location"></i></button></div></div><div class="clearbreak"></div></div><div class="row-fluid"><div class="google_maps map rounded"></div><div id="marker-google-maps" class="hide"><googleMaps/><googleMapsMarKer/></div></div>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                googleMaps:{
                                    type:'hidden'
                                },
                                googleMapsMarKer:{
                                    type:'hidden'
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><div class="content-google-maps clearfix" data-width="${width}${formatWidth}" data-height="${height}" data-value="${googleMaps}" data-marker="${googleMapsMarKer}"><div class="google_maps map rounded"></div></div></div>'
            });
            /* End Static content controls*/
            /* Advanced Group */
            //Name controls
            JSNVisualDesign.register('name', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_NAME'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_NAME'],
                    instruction:'',
                    required:0,
                    autoInsertName:0,
                    size:'jsn-input-mini-fluid',
                    items:[
                        {
                            text:"Mrs",
                            checked:false
                        },
                        {
                            text:"Mr",
                            checked:true
                        },
                        {
                            text:"Ms",
                            checked:false
                        },
                        {
                            text:"Baby",
                            checked:false
                        },
                        {
                            text:"Master",
                            checked:false
                        },
                        {
                            text:"Prof",
                            checked:false
                        },
                        {
                            text:"Dr",
                            checked:false
                        },
                        {
                            text:"Gen",
                            checked:false
                        },
                        {
                            text:"Rep",
                            checked:false
                        },
                        {
                            text:"Sen",
                            checked:false
                        },
                        {
                            text:"St",
                            checked:false
                        }
                    ]
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div><div class="jsn-form-bar"><div class="pull-left"><autoInsertName/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                autoInsertName:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_AUTO_INSERT_NAME_OF_CURRENT_LOGIN_USER'],
                                    title:'JSN_UNIFORM_AUTO_INSERT_USER_NAME'
                                },
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-fluid':language['JSN_UNIFORM_AUTO'],
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        extra:{
                            type:'group',
                            decorator:'<div class="row-fluid"><div class="span6 jsn-items-list-container" id="jsn-field-name"><label for="option-name-itemlist" class="control-label">Fields</label><ul class="jsn-items-list ui-sortable"><vtitle/><vfirst/><vmiddle/><vlast/></ul><sortableField/></div><div id="jsn-name-default-titles" class="span6"><items/></div></div>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                items:{
                                    type:'itemlist',
                                    label:language['JSN_UNIFORM_TITLES']
                                },
                                vtitle:{
                                    field:'name',
                                    type:'checkbox',
                                    label:language['TITLES']
                                },
                                vfirst:{
                                    field:'name',
                                    type:'checkbox',
                                    label:language['FIRST']
                                },
                                vmiddle:{
                                    field:'name',
                                    type:'checkbox',
                                    label:language['MIDDLE']
                                },
                                vlast:{
                                    field:'name',
                                    type:'checkbox',
                                    label:language['LAST']
                                },
                                sortableField:{
                                    type:'hidden'

                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls">' + '{{if vtitle}}<select class="input-small" >{{each(i, val) items}}<option value="${val.text}" {{if val.checked == true || val.checked=="true"}}selected{{/if}}>${val.text}</option>{{/each}}</select>&nbsp;{{/if}}' + '{{if vfirst}}<input type="text" class="${size}" placeholder="' + language['FIRST'] + '" />&nbsp;{{/if}}' + '{{if vmiddle}}<input type="text" class="${size}" placeholder="' + language['MIDDLE'] + '" />&nbsp;{{/if}}' + '{{if vlast}}<input type="text" class="${size}" placeholder="' + language['LAST'] + '" />{{/if}}</div></div>'
            });
            //Email controls
            JSNVisualDesign.register('email', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_EMAIL'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_EMAIL'],
                    instruction:'',
                    required:0,
                    noDuplicates:0,
                    autoInsertEmail:0,
                    size:'jsn-input-medium-fluid',
                    value:''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><noDuplicates/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>' +
                            '<div class="jsn-form-bar"><div class="pull-left"><hideField/><autoInsertEmail/></div><div class="clearbreak"></div></div>',
                            elements:{
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                noDuplicates:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_NO_DUPLICATES'],
                                    title:language['JSN_UNIFORM_IF_CHECKED_VALUE_DUPLICATION']
                                },
                                autoInsertEmail:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_AUTO_INSERT_EMAIL_OF_CURRENT_LOGIN_USER']
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        value:{
                            type:'text',
                            label:language['JSN_UNIFORM_PREDEFINED_VALUE']
                        },
                        valueConfirm:{
                            type:'text'
                        },
                        requiredConfirm:{
                            type:'checkbox',
                            label:language['JSN_UNIFORM_REQUIRED_CONFIRMATION']
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><div class="row-fluid"><input class="${size}" type="text" placeholder="${value}" /></div>{{if requiredConfirm}}<div class="row-fluid"><input class="${size}" type="text" placeholder="${valueConfirm}" /></div>{{/if}}</div></div>'
            });
            //Recipient email controls
            JSNVisualDesign.register('recepient-email', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_RECIPIENT_EMAIL'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_RECIPIENT_EMAIL'],
                    instruction:'',
                    required:0,
                    disableMultiple:0,
                    size:'jsn-input-fluid',
                    items:[
                        {
                            text:'Value 1 [EMAIL:value1@example.com]',
                            checked:false
                        },
                        {
                            text:'Value 2 [EMAIL:value2@example.com]',
                            checked:false
                        },
                        {
                            text:'Value 3 [EMAIL:value3@example.com]',
                            checked:false
                        }
                    ],
                    value:'',
                    showInNotificationEmail: 'No'
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        inputsize:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-fluid':language['JSN_UNIFORM_AUTO'],
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        items:{
                            type:'itemlist',
                            label:language['JSN_UNIFORM_ITEMS'],
                            actionField:false,
                            actionMoneyField:false,
                            actionRecieptEmail:true,
                            multipleCheck:true
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><disableMultiple/></div><div class="pull-right"><randomize/></div><div class="clearbreak"></div></div>',
                            elements:{
                                disableMultiple:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_DISABLE_MULTIPLE_SELECTION']
                                }
                            }
                        },
                        extraShowInNotificationEmail:{
                            type:'group',
                            decorator:'<div class="form-inline"><showInNotificationEmail/><div>',
                            title:language['JSN_UNIFORM_ENABLE_SHOW_IN_NOTIFICATION_EMAIL'],
                            elements:{
                                showInNotificationEmail:{
                                    type:'radio',
                                    label:language['JSN_UNIFORM_ENABLE_SHOW_IN_NOTIFICATION_EMAIL'],
                                    options:{
                                        'Yes':'Yes',
                                        'No':'No'
                                    }
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><select {{if disableMultiple!=1||disableMultiple!="1"}}multiple{{/if}} class="${size}" >{{each(i, val) items}}<option value="${val.text}" {{if val.checked == true || val.checked=="true"}}selected{{/if}}>${val.text}</option>{{/each}}</select></div></div>'
            });
            //File upload controls
            JSNVisualDesign.register('file-upload', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_FILE_UPLOAD'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_FILE_UPLOAD'],
                    instruction:'',
                    required:0,
                    allowedExtensions:'png,jpg,gif,zip,rar,txt,doc,pdf',
                    maxSize:0,
                    maxSizeUnit:'KB'
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><multiple/><i id="multiple-upload-note" class="icon-question-sign" original-title="'+language["JSN_UNIFORM_MULTIPLE_UPLOAD_NOTE"]+'"></i></div><div class="clearbreak"></div></div>',
                            elements:{
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                multiple:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_MULTIPLE_UPLOADS']
                                }
                            }
                        },

                        limit:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><limitFileExtensions/><allowedExtensions/><i class="icon-question-sign" id="limit-extensions" original-title=""></i></div><div class="jsn-form-bar"><limitFileSize/><maxSize/><maxSizeUnit/><i id="limit-size-upload" class="icon-question-sign" original-title=""></i></div>',
                            elements:{
                                limitFileExtensions:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_LIMIT_FILE']
                                },
                                limitFileSize:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_LIMIT_FILE']
                                },
                                allowedExtensions:{
                                    type:'text',
                                    label:language['JSN_UNIFORM_FILE_EXTENSIONS'],
                                    attrs:{
                                        'class':'input-large'
                                    }
                                },
                                maxSize:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                },

                                maxSizeUnit:{
                                    type:'select',
                                    options:{
                                        'KB':'KB',
                                        'MB':'MB'
                                    },
                                    attrs:{
                                        'class':'input-small'
                                    }

                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><input type="file" placeholder="${value}" /></div></div>'
            });
            //Name controls
            JSNVisualDesign.register('likert', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_LIKERT'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_LIKERT'],
                    instruction:'',
                    required:0,
                    size:'jsn-input-mini-fluid',
                    rows:[
                        {
                        	text:"Statement 1",
                            checked:false
                        },
                        {
                        	text:"Statement 2",
                            checked:false
                        },
                        {
                        	text:"Statement 3",
                            checked:false
                        }
                    ],
                    columns:[
                        {
                            text:"Good",
                            checked:false
                        },
                        {
                            text:"Average",
                            checked:false
                        },
                        {
                            text:"Poor",
                            checked:false
                        }
                    ]
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        extra:{
                            type:'group',
                            decorator:'<div class="row-fluid"><div class="span6 jsn-items-list-container" id="jsn-rows-likert"><rows/></div><div id="jsn-columns-likert" class="span6"><columns/></div></div>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                rows:{
                                    type:'itemlist',
                                    label: language['JSN_UNIFORM_ROWS'],
                                    classHidden:'hide'
                                },
                                columns:{
                                    type:'itemlist',
                                    label:language['JSN_UNIFORM_COLUMNS'],
                                    classHidden:'hide'
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls jsn-uf-likert-field"><table class="table table-bordered table-striped"><thead><th></th>{{each(i, column) columns}}<th class="center">${column.text}</th>{{/each}}</thead><tbody>{{each(j, row) rows}}<tr><td>${row.text}</td>{{each(i, column) columns}}<td class="center"><input type="radio"/></td>{{/each}}</tr>{{/each}}</tbody></table></div></div>'
            });
            /* Address field */
            JSNVisualDesign.register('address', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_ADDRESS'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_ADDRESS'],
                    instruction:'',
                    required:0,
                    vstreetAddress:0,
                    vstreetAddress2:0,
                    vcity:0,
                    vstate:0,
                    vcode:0,
                    vcountry:0,
                    country:[
                        {
                            text:"Afghanistan",
                            checked:true
                        },
                        {
                            text:"Albania",
                            checked:false
                        },
                        {
                            text:"Algeria",
                            checked:false
                        },
                        {
                            text:"Andorra",
                            checked:false
                        },
                        {
                            text:"Angola",
                            checked:false
                        },
                        {
                            text:"Antigua and Barbuda",
                            checked:false
                        },
                        {
                            text:"Argentina",
                            checked:false
                        },
                        {
                            text:"Armenia",
                            checked:false
                        },
                        {
                            text:"Aruba",
                            checked:false
                        },
                        {
                            text:"Australia",
                            checked:false
                        },
                        {
                            text:"Austria",
                            checked:false
                        },
                        {
                            text:"Azerbaijan",
                            checked:false
                        },
                        {
                            text:"Bahamas",
                            checked:false
                        },
                        {
                            text:"Bahrain",
                            checked:false
                        },
                        {
                            text:"Bangladesh",
                            checked:false
                        },
                        {
                            text:"Barbados",
                            checked:false
                        },
                        {
                            text:"Belarus",
                            checked:false
                        },
                        {
                            text:"Belgium",
                            checked:false
                        },
                        {
                            text:"Belize",
                            checked:false
                        },
                        {
                            text:"Benin",
                            checked:false
                        },
                        {
                            text:"Bhutan",
                            checked:false
                        },
                        {
                            text:"Bolivia",
                            checked:false
                        },
                        {
                            text:"Bonaire",
                            checked:false
                        },
                        {
                            text:"Bosnia and Herzegovina",
                            checked:false
                        },
                        {
                            text:"Botswana",
                            checked:false
                        },
                        {
                            text:"Brazil",
                            checked:false
                        },
                        {
                            text:"Brunei",
                            checked:false
                        },
                        {
                            text:"Bulgaria",
                            checked:false
                        },
                        {
                            text:"Burkina Faso",
                            checked:false
                        },
                        {
                            text:"Burundi",
                            checked:false
                        },
                        {
                            text:"Cambodia",
                            checked:false
                        },
                        {
                            text:"Cameroon",
                            checked:false
                        },
                        {
                            text:"Canada",
                            checked:false
                        },
                        {
                            text:"Cape Verde",
                            checked:false
                        },
                        {
                            text:"Central African Republic",
                            checked:false
                        },
                        {
                            text:"Chad",
                            checked:false
                        },
                        {
                            text:"Chile",
                            checked:false
                        },
                        {
                            text:"China",
                            checked:false
                        },
                        {
                            text:"Colombi",
                            checked:false
                        },
                        {
                            text:"Comoros",
                            checked:false
                        },
                        {
                            text:"Congo (Brazzaville)",
                            checked:false
                        },
                        {
                            text:"Congo",
                            checked:false
                        },
                        {
                            text:"Costa Rica",
                            checked:false
                        },
                        {
                            text:"Cote d'Ivoire",
                            checked:false
                        },
                        {
                            text:"Croatia",
                            checked:false
                        },
                        {
                            text:"Cuba",
                            checked:false
                        },
                        {
                            text:"Curaçao",
                            checked:false
                        },
                        {
                            text:"Cyprus",
                            checked:false
                        },
                        {
                            text:"Czech Republic",
                            checked:false
                        },
                        {
                            text:"Denmark",
                            checked:false
                        },
                        {
                            text:"Djibouti",
                            checked:false
                        },
                        {
                            text:"Dominica",
                            checked:false
                        },
                        {
                            text:"Dominican Republic",
                            checked:false
                        },
                        {
                            text:"East Timor (Timor Timur)",
                            checked:false
                        },
                        {
                            text:"Ecuador",
                            checked:false
                        },
                        {
                            text:"Egypt",
                            checked:false
                        },
                        {
                            text:"El Salvador",
                            checked:false
                        },
                        {
                            text:"Equatorial Guinea",
                            checked:false
                        },
                        {
                            text:"Eritrea",
                            checked:false
                        },
                        {
                            text:"Estonia",
                            checked:false
                        },
                        {
                            text:"Ethiopia",
                            checked:false
                        },
                        {
                            text:"Fiji",
                            checked:false
                        },
                        {
                            text:"Finland",
                            checked:false
                        },
                        {
                            text:"France",
                            checked:false
                        },
                        {
                            text:"Gabon",
                            checked:false
                        },
                        {
                            text:"Gambia, The",
                            checked:false
                        },
                        {
                            text:"Georgia",
                            checked:false
                        },
                        {
                            text:"Germany",
                            checked:false
                        },
                        {
                            text:"Ghana",
                            checked:false
                        },
                        {
                            text:"Greece",
                            checked:false
                        },
                        {
                            text:"Grenada",
                            checked:false
                        },
                        {
                            text:"Guatemala",
                            checked:false
                        },
                        {
                            text:"Guinea",
                            checked:false
                        },
                        {
                            text:"Guinea-Bissau",
                            checked:false
                        },
                        {
                            text:"Guyana",
                            checked:false
                        },
                        {
                            text:"Haiti",
                            checked:false
                        },
                        {
                            text:"Honduras",
                            checked:false
                        },
                        {
                            text:"Hungary",
                            checked:false
                        },
                        {
                            text:"Iceland",
                            checked:false
                        },
                        {
                            text:"India",
                            checked:false
                        },
                        {
                            text:"Indonesia",
                            checked:false
                        },
                        {
                            text:"Iran",
                            checked:false
                        },
                        {
                            text:"Iraq",
                            checked:false
                        },
                        {
                            text:"Ireland",
                            checked:false
                        },
                        {
                            text:"Israel",
                            checked:false
                        },
                        {
                            text:"Italy",
                            checked:false
                        },
                        {
                            text:"Jamaica",
                            checked:false
                        },
                        {
                            text:"Japan",
                            checked:false
                        },
                        {
                            text:"Jordan",
                            checked:false
                        },
                        {
                            text:"Kazakhstan",
                            checked:false
                        },
                        {
                            text:"Kenya",
                            checked:false
                        },
                        {
                            text:"Kiribati",
                            checked:false
                        },
                        {
                            text:"Korea, North",
                            checked:false
                        },
                        {
                            text:"Korea, South",
                            checked:false
                        },
                        {
                            text:"Kuwait",
                            checked:false
                        },
                        {
                            text:"Kyrgyzstan",
                            checked:false
                        },
                        {
                            text:"Laos",
                            checked:false
                        },
                        {
                            text:"Latvia",
                            checked:false
                        },
                        {
                            text:"Lebanon",
                            checked:false
                        },
                        {
                            text:"Lesotho",
                            checked:false
                        },
                        {
                            text:"Liberia",
                            checked:false
                        },
                        {
                            text:"Libya",
                            checked:false
                        },
                        {
                            text:"Liechtenstein",
                            checked:false
                        },
                        {
                            text:"Lithuania",
                            checked:false
                        },
                        {
                            text:"Luxembourg",
                            checked:false
                        },
                        {
                            text:"Macedonia",
                            checked:false
                        },
                        {
                            text:"Madagascar",
                            checked:false
                        },
                        {
                            text:"Malawi",
                            checked:false
                        },
                        {
                            text:"Malaysia",
                            checked:false
                        },
                        {
                            text:"Maldives",
                            checked:false
                        },
                        {
                            text:"Mali",
                            checked:false
                        },
                        {
                            text:"Malta",
                            checked:false
                        },
                        {
                            text:"Marshall Islands",
                            checked:false
                        },
                        {
                            text:"Mauritania",
                            checked:false
                        },
                        {
                            text:"Mauritius",
                            checked:false
                        },
                        {
                            text:"Mexico",
                            checked:false
                        },
                        {
                            text:"Micronesia",
                            checked:false
                        },
                        {
                            text:"Moldova",
                            checked:false
                        },
                        {
                            text:"Monaco",
                            checked:false
                        },
                        {
                            text:"Mongolia",
                            checked:false
                        },
                        {
                            text:"Morocco",
                            checked:false
                        },
                        {
                            text:"Mozambique",
                            checked:false
                        },
                        {
                            text:"Myanmar",
                            checked:false
                        },
                        {
                            text:"Namibia",
                            checked:false
                        },
                        {
                            text:"Nauru",
                            checked:false
                        },
                        {
                            text:"Nepa",
                            checked:false
                        },
                        {
                            text:"Netherlands",
                            checked:false
                        },
                        {
                            text:"New Zealand",
                            checked:false
                        },
                        {
                            text:"Nicaragua",
                            checked:false
                        },
                        {
                            text:"Niger",
                            checked:false
                        },
                        {
                            text:"Nigeria",
                            checked:false
                        },
                        {
                            text:"Norway",
                            checked:false
                        },
                        {
                            text:"Oman",
                            checked:false
                        },
                        {
                            text:"Pakistan",
                            checked:false
                        },
                        {
                            text:"Palau",
                            checked:false
                        },
                        {
                            text:"Panama",
                            checked:false
                        },
                        {
                            text:"Papua New Guinea",
                            checked:false
                        },
                        {
                            text:"Paraguay",
                            checked:false
                        },
                        {
                            text:"Peru",
                            checked:false
                        },
                        {
                            text:"Philippines",
                            checked:false
                        },
                        {
                            text:"Poland",
                            checked:false
                        },
                        {
                            text:"Portugal",
                            checked:false
                        },
                        {
                            text:"Qatar",
                            checked:false
                        },
                        {
                            text:"Romania",
                            checked:false
                        },
                        {
                            text:"Russia",
                            checked:false
                        },
                        {
                            text:"Rwanda",
                            checked:false
                        },
                        {
                            text:"Saba",
                            checked:false
                        },
                        {
                            text:"Saint Kitts and Nevis",
                            checked:false
                        },
                        {
                            text:"Saint Lucia",
                            checked:false
                        },
                        {
                            text:"Saint Vincent",
                            checked:false
                        },
                        {
                            text:"Samoa",
                            checked:false
                        },
                        {
                            text:"San Marino",
                            checked:false
                        },
                        {
                            text:"Sao Tome and Principe",
                            checked:false
                        },
                        {
                            text:"Saudi Arabia",
                            checked:false
                        },
                        {
                            text:"Senegal",
                            checked:false
                        },
                        {
                            text:"Serbia and Montenegro",
                            checked:false
                        },
                        {
                            text:"Seychelles",
                            checked:false
                        },
                        {
                            text:"Sierra Leone",
                            checked:false
                        },
                        {
                            text:"Singapore",
                            checked:false
                        },
                        {
                            text:"Sint Eustatius",
                            checked:false
                        },
                        {
                            text:"Sint Maarten",
                            checked:false
                        },
                        {
                            text:"Slovakia",
                            checked:false
                        },
                        {
                            text:"Slovenia",
                            checked:false
                        },
                        {
                            text:"Solomon Islands",
                            checked:false
                        },
                        {
                            text:"Somalia",
                            checked:false
                        },
                        {
                            text:"South Africa",
                            checked:false
                        },
                        {
                            text:"Spain",
                            checked:false
                        },
                        {
                            text:"Sri Lanka",
                            checked:false
                        },
                        {
                            text:"Sudan",
                            checked:false
                        },
                        {
                            text:"Suriname",
                            checked:false
                        },
                        {
                            text:"Swaziland",
                            checked:false
                        },
                        {
                            text:"Sweden",
                            checked:false
                        },
                        {
                            text:"Switzerland",
                            checked:false
                        },
                        {
                            text:"Syria",
                            checked:false
                        },
                        {
                            text:"Taiwan",
                            checked:false
                        },
                        {
                            text:"Tajikistan",
                            checked:false
                        },
                        {
                            text:"Tanzania",
                            checked:false
                        },
                        {
                            text:"Thailand",
                            checked:false
                        },
                        {
                            text:"Togo",
                            checked:false
                        },
                        {
                            text:"Tonga",
                            checked:false
                        },
                        {
                            text:"Trinidad and Tobago",
                            checked:false
                        },
                        {
                            text:"Tunisia",
                            checked:false
                        },
                        {
                            text:"Turkey",
                            checked:false
                        },
                        {
                            text:"Turkmenistan",
                            checked:false
                        },
                        {
                            text:"Tuvalu",
                            checked:false
                        },
                        {
                            text:"Uganda",
                            checked:false
                        },
                        {
                            text:"Ukraine",
                            checked:false
                        },
                        {
                            text:"United Arab Emirates",
                            checked:false
                        },
                        {
                            text:"United Kingdom",
                            checked:false
                        },
                        {
                            text:"United States",
                            checked:false
                        },
                        {
                            text:"Uruguay",
                            checked:false
                        },
                        {
                            text:"Uzbekistan",
                            checked:false
                        },
                        {
                            text:"Vanuatu",
                            checked:false
                        },
                        {
                            text:"Vatican City",
                            checked:false
                        },
                        {
                            text:"Venezuela",
                            checked:false
                        },
                        {
                            text:"Vietnam",
                            checked:false
                        },
                        {
                            text:"Yemen",
                            checked:false
                        },
                        {
                            text:"Zambia",
                            checked:false
                        },
                        {
                            text:"Zimbabwe",
                            checked:false
                        }
                    ]
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="clearbreak"></div></div>',
                            elements:{
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                }
                            }
                        }
                    },
                    values:{
                        extra:{
                            type:'group',
                            decorator:'<div class="row-fluid"><div class="span6 jsn-items-list-container" id="jsn-field-address"><label for="option-country-itemlist" class="control-label">Fields</label><ul class="jsn-items-list ui-sortable"><vstreetAddress/><vstreetAddress2/><vcity/><vstate/><vcode/><vcountry/></ul><sortableField/></div><div id="jsn-address-default-country" class="span6"><country/></div></div>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                country:{
                                    type:'itemlist',
                                    label:language['COUNTRY'],
                                    multipleCheck:false
                                },
                                vstreetAddress:{
                                    field:'address',
                                    type:'checkbox',
                                    label:language['STREET_ADDRESS']
                                },
                                vstreetAddress2:{
                                    field:'address',
                                    type:'checkbox',
                                    label:language['ADDRESS_LINE_2']
                                },
                                vcity:{
                                    field:'address',
                                    type:'checkbox',
                                    label:language['CITY']
                                },
                                vstate:{
                                    field:'address',
                                    type:'checkbox',
                                    label:language['STATE_PROVINCE_REGION']
                                },
                                vcode:{
                                    field:'address',
                                    type:'checkbox',
                                    label:language['POSTAL_ZIP_CODE']
                                },
                                vcountry:{
                                    field:'address',
                                    type:'checkbox',
                                    label:language['COUNTRY']
                                },
                                sortableField:{
                                    type:'hidden'
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group {{if hideField}}jsn-hidden-field{{/if}} jsn-group-field">' +
                '<label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label>' +
                '<div class="controls">' +
                '{{if vstreetAddress}}<div class="row-fluid"><input type="text" placeholder="' + language['STREET_ADDRESS'] + '" class="jsn-input-xxlarge-fluid" /></div>{{/if}}' +
                '{{if vstreetAddress2}}<div class="row-fluid"><input type="text" placeholder="' + language['ADDRESS_LINE_2'] + '" class="jsn-input-xxlarge-fluid" /></div>{{/if}}' +
                '{{if vcity || vstate}}<div class="row-fluid">' +
                '{{if vcity}}<div class="span6"><input type="text" class="jsn-input-xlarge-fluid" placeholder="' + language['CITY'] + '" /></div>{{/if}}' +
                '{{if vstate}}<div class="span6"><input type="text" class="jsn-input-xlarge-fluid" placeholder="' + language['STATE_PROVINCE_REGION'] + '" /></div>{{/if}}' +
                '</div>{{/if}} {{if vcode || vcountry}}<div class="row-fluid">' +
                '{{if vcode}}<div class="span6"><input type="text" class="jsn-input-xlarge-fluid" placeholder="' + language['POSTAL_ZIP_CODE'] + '" /></div>{{/if}}' +
                '{{if vcountry}}<div class="span6"><select class="jsn-input-xlarge-fluid">{{each(i, val) country}}<option value="${val.text}" {{if val.checked == true || val.checked=="true"}}selected{{/if}}>${val.text}</option>{{/each}}</select></div>{{/if}}' +
                '</div>{{/if}}</div></div>'
            });

            //Website controls
            JSNVisualDesign.register('website', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_WEBSITE'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_WEBSITE'],
                    instruction:'',
                    required:0,
                    noDuplicates:0,
                    size:'jsn-input-medium-fluid',
                    value:'http://'
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><noDuplicates/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>' +
                            '<div class="jsn-form-bar"><div class="pull-left"><hideField/></div><div class="clearbreak"></div></div>',
                            elements:{
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                noDuplicates:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_NO_DUPLICATES'],
                                    title:language['JSN_UNIFORM_IF_CHECKED_VALUE_DUPLICATION']
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        value:{
                            type:'text',
                            label:language['JSN_UNIFORM_PREDEFINED_VALUE']
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><input class="${size}" type="text" placeholder="${value}" /></div></div>'
            });
            //Date controls
            JSNVisualDesign.register('date', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_DATE'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_DATE'],
                    instruction:'',
                    required:0,
                    enableRageSelection:0,
                    size:'jsn-input-small-fluid',
                    timeFormat:0,
                    dateFormat:0,
                    yearRangeMin:'1930',
                    yearRangeMax:(new Date).getFullYear() + 10,
                    calendarStartOfWeek: 'monday',
                    autoSetCurrentDate:0
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',
                            elements:{
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                }
                            }
                        }


                    },
                    /* Parameters on values tab */
                    values:{
                        extra:{
                            type:'horizontal',
                            decorator:'<dateValue/> <dateValueRange/>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                dateValue:{
                                    type:'text',
                                    group:'horizontal',
                                    attrs:{
                                        'class':'input-date-time'
                                    }
                                },
                                dateValueRange:{
                                    type:'text',
                                    group:'horizontal',
                                    attrs:{
                                        'class':'input-date-time'
                                    }
                                }
                            }
                        },
                        selection:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><enableRageSelection/></div><div class="jsn-form-bar"><equalToOrGreaterThanToday/></div><div class="jsn-form-bar"><autoSetCurrentDate/></div><div class="jsn-form-bar"><calendarStartOfWeek/></div><div class="jsn-form-bar"><dateFormat/><dateOptionFormat/></div><div id="jsn-custom-date" class="jsn-form-bar hide"><customFormatDate/></div><div class="jsn-form-bar"><timeFormat/><timeOptionFormat/></div>',
                            elements:{
                                dateFormat:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_SHOW_DATE_FORMAT']
                                },
                                timeFormat:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_SHOW_TIME_FORMAT']
                                },
                                enableRageSelection:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_ENABLE_RANGE_SELECTION']
                                },
                                dateOptionFormat:{
                                    type:'select',
                                    options:{
                                        'mm/dd/yy':language['JSN_UNIFORM_DATE_FORMAT_DEFAULT'],
                                        'yy-mm-dd':language['JSN_UNIFORM_DATE_FORMAT_ISO8601'],
                                        'd M, y':language['JSN_UNIFORM_DATE_FORMAT_SHORT'],
                                        'd MM, y':language['JSN_UNIFORM_DATE_FORMAT_MEDIUM'],
                                        'DD, d MM, yy':language['JSN_UNIFORM_DATE_FORMAT_FULL'],
                                        'custom':language['JSN_UNIFORM_DATE_FORMAT_CUSTOM']
                                    }
                                },
                                customFormatDate:{
                                    type:'text',
                                    attrs:{
                                        'id':'jsn-custom-date-field',
                                        'placeholder':language['JSN_UNIFORM_CUSTOM_DATE_FORMAT']
                                    }
                                },
                                timeOptionFormat:{
                                    type:'select',
                                    options:{
                                        'hh:mm tt':language['JSN_UNIFORM_TIME_FORMAT_12'],
                                        'HH:mm':language['JSN_UNIFORM_TIME_FORMAT_24']
                                    }
                                },
                                equalToOrGreaterThanToday: {
                                    type: 'checkbox',
                                    label: language['JSN_UNIFORM_EQUAL_TO_OR_GREATER_THAN_TODAY']
                                },
                                calendarStartOfWeek:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_DATE_CALENDAR_START_OF_WEEK'],
                                    options:{
                                        'monday':language['JSN_UNIFORM_DATE_CALENDAR_START_OF_WEEK_MONDAY'],
                                        'sunday': language['JSN_UNIFORM_DATE_CALENDAR_START_OF_WEEK_SUNDAY']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                },
                                autoSetCurrentDate: {
                                    type: 'checkbox',
                                    label: language['JSN_UNIFORM_DATE_CALENDAR_AUTO_SET_CURRENT_DATE']
                                }                                
                            }
                        },
                        dateRange:{
                            type:'horizontal',
                            decorator:'<div class="jsn-form-bar"><yearRangeMin/><span class="jsn-field-prefix">To</span><yearRangeMax/></div>',
                            title:language['JSN_UNIFORM_YEAR_RANGE_SELECTION'],
                            elements:{
                                yearRangeMin:{
                                    type:'text',
                                    group:'horizontal',
                                    field:'input-inline',
                                    validate:['number'],
                                    attrs:{
                                        'class':'input-small'
                                    }
                                },
                                yearRangeMax:{
                                    type:'text',
                                    group:'horizontal',
                                    field:'input-inline',
                                    validate:['number'],
                                    attrs:{
                                        'class':'input-small'
                                    }
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><div class="input-append jsn-inline"><input placeholder="${dateValue}" class="{{if (timeFormat==1 || timeFormat =="1")&&(dateFormat==1 || dateFormat =="1")  }} input-medium {{else}} input-small {{/if}} uniform-date-time" dateFormat="{{if dateFormat==1||dateFormat=="1"}}${dateOptionFormat}{{/if}}" timeFormat="{{if timeFormat==1||timeFormat=="1"}}${timeOptionFormat}{{/if}}"  type="text" /></div> {{if enableRageSelection==1||enableRageSelection=="1"}}<div class="input-append jsn-inline"><input placeholder="${dateValueRange}" class="{{if  (timeFormat==1 || timeFormat =="1")&&(dateFormat==1 || dateFormat =="1") }} input-medium {{else}} input-small {{/if}} uniform-date-time" dateFormat="{{if dateFormat==1||dateFormat=="1"}}${dateOptionFormat}{{/if}}" timeFormat="{{if timeFormat==1||timeFormat=="1"}}${timeOptionFormat}{{/if}}" type="text" /></div>{{/if}}</div></div>'
            });
            /* End Advanced Group */
            //Country controls
            JSNVisualDesign.register('country', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_COUNTRY'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_COUNTRY'],
                    instruction:'',
                    required:0,
                    size:'jsn-input-small-fluid',
                    items:[
                        {
                            text:"Afghanistan",
                            checked:true
                        },
                        {
                            text:"Albania",
                            checked:false
                        },
                        {
                            text:"Algeria",
                            checked:false
                        },
                        {
                            text:"Andorra",
                            checked:false
                        },
                        {
                            text:"Angola",
                            checked:false
                        },
                        {
                            text:"Antigua and Barbuda",
                            checked:false
                        },
                        {
                            text:"Argentina",
                            checked:false
                        },
                        {
                            text:"Armenia",
                            checked:false
                        },
                        {
                            text:"Aruba",
                            checked:false
                        },
                        {
                            text:"Australia",
                            checked:false
                        },
                        {
                            text:"Austria",
                            checked:false
                        },
                        {
                            text:"Azerbaijan",
                            checked:false
                        },
                        {
                            text:"Bahamas",
                            checked:false
                        },
                        {
                            text:"Bahrain",
                            checked:false
                        },
                        {
                            text:"Bangladesh",
                            checked:false
                        },
                        {
                            text:"Barbados",
                            checked:false
                        },
                        {
                            text:"Belarus",
                            checked:false
                        },
                        {
                            text:"Belgium",
                            checked:false
                        },
                        {
                            text:"Belize",
                            checked:false
                        },
                        {
                            text:"Benin",
                            checked:false
                        },
                        {
                            text:"Bhutan",
                            checked:false
                        },
                        {
                            text:"Bolivia",
                            checked:false
                        },
                        {
                            text:"Bonaire",
                            checked:false
                        },
                        {
                            text:"Bosnia and Herzegovina",
                            checked:false
                        },
                        {
                            text:"Botswana",
                            checked:false
                        },
                        {
                            text:"Brazil",
                            checked:false
                        },
                        {
                            text:"Brunei",
                            checked:false
                        },
                        {
                            text:"Bulgaria",
                            checked:false
                        },
                        {
                            text:"Burkina Faso",
                            checked:false
                        },
                        {
                            text:"Burundi",
                            checked:false
                        },
                        {
                            text:"Cambodia",
                            checked:false
                        },
                        {
                            text:"Cameroon",
                            checked:false
                        },
                        {
                            text:"Canada",
                            checked:false
                        },
                        {
                            text:"Cape Verde",
                            checked:false
                        },
                        {
                            text:"Central African Republic",
                            checked:false
                        },
                        {
                            text:"Chad",
                            checked:false
                        },
                        {
                            text:"Chile",
                            checked:false
                        },
                        {
                            text:"China",
                            checked:false
                        },
                        {
                            text:"Colombi",
                            checked:false
                        },
                        {
                            text:"Comoros",
                            checked:false
                        },
                        {
                            text:"Congo (Brazzaville)",
                            checked:false
                        },
                        {
                            text:"Congo",
                            checked:false
                        },
                        {
                            text:"Costa Rica",
                            checked:false
                        },
                        {
                            text:"Cote d'Ivoire",
                            checked:false
                        },
                        {
                            text:"Croatia",
                            checked:false
                        },
                        {
                            text:"Cuba",
                            checked:false
                        },
                        {
                            text:"Curaçao",
                            checked:false
                        },
                        {
                            text:"Cyprus",
                            checked:false
                        },
                        {
                            text:"Czech Republic",
                            checked:false
                        },
                        {
                            text:"Denmark",
                            checked:false
                        },
                        {
                            text:"Djibouti",
                            checked:false
                        },
                        {
                            text:"Dominica",
                            checked:false
                        },
                        {
                            text:"Dominican Republic",
                            checked:false
                        },
                        {
                            text:"East Timor (Timor Timur)",
                            checked:false
                        },
                        {
                            text:"Ecuador",
                            checked:false
                        },
                        {
                            text:"Egypt",
                            checked:false
                        },
                        {
                            text:"El Salvador",
                            checked:false
                        },
                        {
                            text:"Equatorial Guinea",
                            checked:false
                        },
                        {
                            text:"Eritrea",
                            checked:false
                        },
                        {
                            text:"Estonia",
                            checked:false
                        },
                        {
                            text:"Ethiopia",
                            checked:false
                        },
                        {
                            text:"Fiji",
                            checked:false
                        },
                        {
                            text:"Finland",
                            checked:false
                        },
                        {
                            text:"France",
                            checked:false
                        },
                        {
                            text:"Gabon",
                            checked:false
                        },
                        {
                            text:"Gambia, The",
                            checked:false
                        },
                        {
                            text:"Georgia",
                            checked:false
                        },
                        {
                            text:"Germany",
                            checked:false
                        },
                        {
                            text:"Ghana",
                            checked:false
                        },
                        {
                            text:"Greece",
                            checked:false
                        },
                        {
                            text:"Grenada",
                            checked:false
                        },
                        {
                            text:"Guatemala",
                            checked:false
                        },
                        {
                            text:"Guinea",
                            checked:false
                        },
                        {
                            text:"Guinea-Bissau",
                            checked:false
                        },
                        {
                            text:"Guyana",
                            checked:false
                        },
                        {
                            text:"Haiti",
                            checked:false
                        },
                        {
                            text:"Honduras",
                            checked:false
                        },
                        {
                            text:"Hungary",
                            checked:false
                        },
                        {
                            text:"Iceland",
                            checked:false
                        },
                        {
                            text:"India",
                            checked:false
                        },
                        {
                            text:"Indonesia",
                            checked:false
                        },
                        {
                            text:"Iran",
                            checked:false
                        },
                        {
                            text:"Iraq",
                            checked:false
                        },
                        {
                            text:"Ireland",
                            checked:false
                        },
                        {
                            text:"Israel",
                            checked:false
                        },
                        {
                            text:"Italy",
                            checked:false
                        },
                        {
                            text:"Jamaica",
                            checked:false
                        },
                        {
                            text:"Japan",
                            checked:false
                        },
                        {
                            text:"Jordan",
                            checked:false
                        },
                        {
                            text:"Kazakhstan",
                            checked:false
                        },
                        {
                            text:"Kenya",
                            checked:false
                        },
                        {
                            text:"Kiribati",
                            checked:false
                        },
                        {
                            text:"Korea, North",
                            checked:false
                        },
                        {
                            text:"Korea, South",
                            checked:false
                        },
                        {
                            text:"Kuwait",
                            checked:false
                        },
                        {
                            text:"Kyrgyzstan",
                            checked:false
                        },
                        {
                            text:"Laos",
                            checked:false
                        },
                        {
                            text:"Latvia",
                            checked:false
                        },
                        {
                            text:"Lebanon",
                            checked:false
                        },
                        {
                            text:"Lesotho",
                            checked:false
                        },
                        {
                            text:"Liberia",
                            checked:false
                        },
                        {
                            text:"Libya",
                            checked:false
                        },
                        {
                            text:"Liechtenstein",
                            checked:false
                        },
                        {
                            text:"Lithuania",
                            checked:false
                        },
                        {
                            text:"Luxembourg",
                            checked:false
                        },
                        {
                            text:"Macedonia",
                            checked:false
                        },
                        {
                            text:"Madagascar",
                            checked:false
                        },
                        {
                            text:"Malawi",
                            checked:false
                        },
                        {
                            text:"Malaysia",
                            checked:false
                        },
                        {
                            text:"Maldives",
                            checked:false
                        },
                        {
                            text:"Mali",
                            checked:false
                        },
                        {
                            text:"Malta",
                            checked:false
                        },
                        {
                            text:"Marshall Islands",
                            checked:false
                        },
                        {
                            text:"Mauritania",
                            checked:false
                        },
                        {
                            text:"Mauritius",
                            checked:false
                        },
                        {
                            text:"Mexico",
                            checked:false
                        },
                        {
                            text:"Micronesia",
                            checked:false
                        },
                        {
                            text:"Moldova",
                            checked:false
                        },
                        {
                            text:"Monaco",
                            checked:false
                        },
                        {
                            text:"Mongolia",
                            checked:false
                        },
                        {
                            text:"Morocco",
                            checked:false
                        },
                        {
                            text:"Mozambique",
                            checked:false
                        },
                        {
                            text:"Myanmar",
                            checked:false
                        },
                        {
                            text:"Namibia",
                            checked:false
                        },
                        {
                            text:"Nauru",
                            checked:false
                        },
                        {
                            text:"Nepa",
                            checked:false
                        },
                        {
                            text:"Netherlands",
                            checked:false
                        },
                        {
                            text:"New Zealand",
                            checked:false
                        },
                        {
                            text:"Nicaragua",
                            checked:false
                        },
                        {
                            text:"Niger",
                            checked:false
                        },
                        {
                            text:"Nigeria",
                            checked:false
                        },
                        {
                            text:"Norway",
                            checked:false
                        },
                        {
                            text:"Oman",
                            checked:false
                        },
                        {
                            text:"Pakistan",
                            checked:false
                        },
                        {
                            text:"Palau",
                            checked:false
                        },
                        {
                            text:"Panama",
                            checked:false
                        },
                        {
                            text:"Papua New Guinea",
                            checked:false
                        },
                        {
                            text:"Paraguay",
                            checked:false
                        },
                        {
                            text:"Peru",
                            checked:false
                        },
                        {
                            text:"Philippines",
                            checked:false
                        },
                        {
                            text:"Poland",
                            checked:false
                        },
                        {
                            text:"Portugal",
                            checked:false
                        },
                        {
                            text:"Qatar",
                            checked:false
                        },
                        {
                            text:"Romania",
                            checked:false
                        },
                        {
                            text:"Russia",
                            checked:false
                        },
                        {
                            text:"Rwanda",
                            checked:false
                        },
                        {
                            text:"Saba",
                            checked:false
                        },
                        {
                            text:"Saint Kitts and Nevis",
                            checked:false
                        },
                        {
                            text:"Saint Lucia",
                            checked:false
                        },
                        {
                            text:"Saint Vincent",
                            checked:false
                        },
                        {
                            text:"Samoa",
                            checked:false
                        },
                        {
                            text:"San Marino",
                            checked:false
                        },
                        {
                            text:"Sao Tome and Principe",
                            checked:false
                        },
                        {
                            text:"Saudi Arabia",
                            checked:false
                        },
                        {
                            text:"Senegal",
                            checked:false
                        },
                        {
                            text:"Serbia and Montenegro",
                            checked:false
                        },
                        {
                            text:"Seychelles",
                            checked:false
                        },
                        {
                            text:"Sierra Leone",
                            checked:false
                        },
                        {
                            text:"Singapore",
                            checked:false
                        },
                        {
                            text:"Sint Eustatius",
                            checked:false
                        },
                        {
                            text:"Sint Maarten",
                            checked:false
                        },
                        {
                            text:"Slovakia",
                            checked:false
                        },
                        {
                            text:"Slovenia",
                            checked:false
                        },
                        {
                            text:"Solomon Islands",
                            checked:false
                        },
                        {
                            text:"Somalia",
                            checked:false
                        },
                        {
                            text:"South Africa",
                            checked:false
                        },
                        {
                            text:"Spain",
                            checked:false
                        },
                        {
                            text:"Sri Lanka",
                            checked:false
                        },
                        {
                            text:"Sudan",
                            checked:false
                        },
                        {
                            text:"Suriname",
                            checked:false
                        },
                        {
                            text:"Swaziland",
                            checked:false
                        },
                        {
                            text:"Sweden",
                            checked:false
                        },
                        {
                            text:"Switzerland",
                            checked:false
                        },
                        {
                            text:"Syria",
                            checked:false
                        },
                        {
                            text:"Taiwan",
                            checked:false
                        },
                        {
                            text:"Tajikistan",
                            checked:false
                        },
                        {
                            text:"Tanzania",
                            checked:false
                        },
                        {
                            text:"Thailand",
                            checked:false
                        },
                        {
                            text:"Togo",
                            checked:false
                        },
                        {
                            text:"Tonga",
                            checked:false
                        },
                        {
                            text:"Trinidad and Tobago",
                            checked:false
                        },
                        {
                            text:"Tunisia",
                            checked:false
                        },
                        {
                            text:"Turkey",
                            checked:false
                        },
                        {
                            text:"Turkmenistan",
                            checked:false
                        },
                        {
                            text:"Tuvalu",
                            checked:false
                        },
                        {
                            text:"Uganda",
                            checked:false
                        },
                        {
                            text:"Ukraine",
                            checked:false
                        },
                        {
                            text:"United Arab Emirates",
                            checked:false
                        },
                        {
                            text:"United Kingdom",
                            checked:false
                        },
                        {
                            text:"United States",
                            checked:false
                        },
                        {
                            text:"Uruguay",
                            checked:false
                        },
                        {
                            text:"Uzbekistan",
                            checked:false
                        },
                        {
                            text:"Vanuatu",
                            checked:false
                        },
                        {
                            text:"Vatican City",
                            checked:false
                        },
                        {
                            text:"Venezuela",
                            checked:false
                        },
                        {
                            text:"Vietnam",
                            checked:false
                        },
                        {
                            text:"Yemen",
                            checked:false
                        },
                        {
                            text:"Zambia",
                            checked:false
                        },
                        {
                            text:"Zimbabwe",
                            checked:false
                        }
                    ],
                    value:''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',
                            elements:{
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        items:{
                            type:'itemlist',
                            label:language['JSN_UNIFORM_ITEMS'],
                            multipleCheck:false
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><select class="${size}" >{{each(i, val) items}}<option value="${val.text}" {{if val.checked == true || val.checked=="true"}}selected{{/if}}>${val.text}</option>{{/each}}</select></div></div>'
            });
            // Number controls
            JSNVisualDesign.register('number', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_NUMBER'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_NUMBER'],
                    instruction:'',
                    required:0,
                    limitation:0,
                    limitMin:0,
                    limitMax:0,
                    size:'jsn-input-mini-fluid',
                    value:''
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        inputsize:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',
                            elements:{
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-large-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        extra:{
                            type:'horizontal',
                            decorator:'<value/><span class="jsn-field-prefix">.</span><decimal/>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                value:{
                                    type:'number',
                                    group:'horizontal',
                                    field:'number',
                                    attrs:{
                                        'class':'jsn-input-small-fluid'
                                    }
                                },
                                decimal:{
                                    type:'number',
                                    group:'horizontal',
                                    field:'number',
                                    attrs:{
                                        'class':'input-mini'
                                    }
                                }
                            }
                        },
                        allowUser:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><showDecimal/></div>',
                            elements:{
                                showDecimal:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_SHOW_DECIMAL']
                                }
                            }
                        },
                        limit:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><limitation/><limitMin/><limitMax/></div>',
                            elements:{
                                limitation:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_LIMIT_NUMBER']
                                },
                                limitMin:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_WITHIN'],
                                    validate:['number']
                                },
                                limitMax:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_AND'],
                                    validate:['number']
                                }
                            }
                        }

                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls clearfix"><input type="text" class="${size}" placeholder="${value}" />{{if showDecimal}}<span class="jsn-field-prefix">.</span><input type="text" class="input-mini" placeholder="${decimal}" />{{/if}}</div></div>'
            });
            // Slider input control.
            JSNVisualDesign.register('slider', {
                caption: language['JSN_UNIFORM_DEFAULT_LABEL_NUMBER_SLIDER'],
                group: 'extra',
                defaults: {
                    label: language['JSN_UNIFORM_DEFAULT_LABEL_NUMBER_SLIDER'],
                    instruction: '',
                    required: 0,
                    size: 'jsn-input-mini-fluid',
                    value: 0,
                    min: 0,
                    max: 100,
                    step: 1
                },
                params: {
                    // Parameters on general tab.
                    general: {
                        label: {
                            type: 'text',
                            label: language['JSN_UNIFORM_TITLE']
                        },
                        customClass: {
                            type: 'text',
                            label: language['JSN_UNIFORM_CLASS']
                        },
                        instruction: {
                            type: 'textarea',
                            label: language['JSN_UNIFORM_INSTRUCTION']
                        },
                        inputsize: {
                            type: 'group',
                            decorator: '<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',
                            elements: {
                                required: {
                                    type: 'checkbox',
                                    label: language['JSN_UNIFORM_REQUIRED']
                                },
                                hideField: {
                                    type: 'checkbox',
                                    label: language['JSN_UNIFORM_HIDDEN']
                                },
                                size: {
                                    type: 'select',
                                    label: language['JSN_UNIFORM_SIZE'],
                                    options: {
                                        'jsn-input-mini-fluid': language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid': language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid': language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-large-fluid': language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs: {
                                        'class': 'input-medium'
                                    }
                                }
                            }
                        }
                    },
                    // Parameters on values tab.
                    values: {
                        limit: {
                            type: 'group',
                            decorator: '<div class="jsn-form-bar jsn-slider-limitation"><min/><max/><step/></div>',
                            elements: {
                                min: {
                                    type: 'number',
                                    label: language['JSN_UNIFORM_SLIDER_MIN'],
                                    validate: ['number']
                                },
                                max: {
                                    type: 'number',
                                    label: language['JSN_UNIFORM_SLIDER_MAX'],
                                    validate: ['number']
                                },
                                step: {
                                    type: 'number',
                                    label: language['JSN_UNIFORM_SLIDER_STEP'],
                                    validate: ['number']
                                }
                            }
                        },
                        value: {
                            type: 'number',
                            label: language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            attrs: {
                                'class': 'number jsn-input-xxlarge-fluid'
                            }
                        }
                    }
                },
                tmpl: '<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls clearfix"><input type="range" class="jsn-uf-slider ${size}" placeholder="${value}" value="${value}" min="${min}" max="${max}" step="${step}" /> <span class="btn btn-icon jsn-uf-slider-value">${value}</span></div></div>'
            });
            //End Country
            //Phone controls
            JSNVisualDesign.register('phone', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_PHONE'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_PHONE'],
                    instruction:'',
                    required:0,
                    format:'1-text',
                    value:''
                },
                params:{
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        inputsize:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"></div><div class="clearbreak"></div></div>',
                            elements:{
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                },
                                noDuplicates: {
                                    type: 'checkbox',
                                    label: language['JSN_UNIFORM_NO_DUPLICATES'],
                                    title: language['JSN_UNIFORM_IF_CHECKED_VALUE_DUPLICATION']
                                }
                            }
                        }
                    },
                    values:{
                        value:{
                            type:'text',
                            label:language['JSN_UNIFORM_PREDEFINED_VALUE']
                        },
                        extra:{
                            type:'horizontal',
                            decorator:'<oneField/><span class="jsn-field-prefix">-</span><twoField/><span class="jsn-field-prefix">-</span><threeField/>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                oneField:{
                                    type:'text',
                                    group:'horizontal',
                                    field:'input-inline',
                                    attrs:{
                                        'class':'input-small'
                                    }
                                },
                                twoField:{
                                    type:'text',
                                    group:'horizontal',
                                    field:'input-inline',
                                    attrs:{
                                        'class':'input-small'
                                    }
                                },
                                threeField:{
                                    type:'text',
                                    group:'horizontal',
                                    field:'input-inline',
                                    attrs:{
                                        'class':'input-small'
                                    }
                                }
                            }
                        },
                        format:{
                            type:'select',
                            label:language['JSN_UNIFORM_PHONE_FORMAT'],
                            options:{
                                '1-field':language['JSN_UNIFORM_1_FIELD'],
                                '3-field':language['JSN_UNIFORM_3_FIELDS']
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls">{{if format=="1-field"}}<input class="jsn-input-medium-fluid" type="text" placeholder="${value}" />{{else}}<div class="jsn-inline"><input type="text" class="jsn-input-mini-fluid" placeholder="${oneField}"></div><span class="jsn-field-prefix">-</span><div class="jsn-inline"><input type="text" class="jsn-input-mini-fluid" placeholder="${twoField}"></div><span class="jsn-field-prefix">-</span><div class="jsn-inline"><input type="text" class="jsn-input-mini-fluid" placeholder="${threeField}"></div>{{/if}}</div></div>'
            });
            //Currency controls
            JSNVisualDesign.register('currency', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_CURRENCY'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_CURRENCY'],
                    instruction:'',
                    required:0,
                    format:'Dollars',
                    value:'',
                    showCurrencyTitle:'Yes'
                },
                params:{
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        inputsize:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"></div><div class="clearbreak"></div></div>',
                            elements:{
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                }
                            }
                        }
                    },
                    values:{
                        extra:{
                            type:'horizontal',
                            decorator:'<value/><span class="jsn-field-prefix">.</span><cents/>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                value:{
                                    type:'text',
                                    group:'horizontal',
                                    field:'currency',
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                },
                                cents:{
                                    type:'text',
                                    group:'horizontal',
                                    field:'currency',
                                    attrs:{
                                        'class':'input-mini'
                                    }
                                }
                            }
                        },
                        format:{
                            type:'select',
                            label:language['JSN_UNIFORM_CURRENCY_FORMAT'],
                            options:{
                                'Dollars':'$ Dollars',
                                'Haht':'฿ Thai Baht',
                                'Taiwan':'NT$ Taiwan New Dollars',
                                'Francs':'CHF Swiss Franc',
                                'Krona':'kr Krona',
                                'SGDollars':'$ Singapore Dollars',
                                'Ruble':'руб Russian Ruble',
                                'Pounds':'£ Pounds Sterling',
                                'Grosze':'zł Polish Zloty',
                                'NZD':'$ New Zealand Dollars',
                                'NOK':'kr Norwegian Krone',
                                'Yen':'¥ Japanese Yen',
                                'Forint':'Ft Hungarian Forint',
                                'HKD':'$ Hong Kong Dollars',
                                'Euros':'€ Euros',
                                'DKK':'kr Danish Krone',
                                'Koruna':'Kč Koruna',
                                'CAD':'$ Canadian Dollars',
                                'BRL':'R$ Brazilian Real',
                                'AUD':'$ Australian Dollars',
                                'Pesos':'$ Pesos',
                                'Ringgit':'RM Ringgit',
                                'Shekel':'₪ Shekel',
                                'Zloty':'zł Złoty',
                                'Rupee':'₹ Rupee'
                            }
                        },
                        extraShowTitle:{
                            type:'group',
                            decorator:'<div class="form-inline"><showCurrencyTitle/><div>',
                            title:language['JSN_UNIFORM_PREDEFINED_VALUE'],
                            elements:{
                                showCurrencyTitle:{
                                    type:'radio',
                                    label:language['JSN_UNIFORM_SHOW_CURRENCY_TITLE'],
                                    options:{
                                        'Yes':'Yes',
                                        'No':'No'
                                    }
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}">' +
                '<label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}' +
                '{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label>' +
                '<div class="controls clearfix">' +
                '<div class="input-prepend jsn-inline currency-value">' +
                '<div class="controls-inner">' +
                '<span class="add-on">{{if format=="Haht"}}฿{{else format=="Rupee"}}₹{{else format=="Dollars"}}&#36;{{else format=="Euros"}}€{{else format=="Forint"}}Ft{{else format=="Francs"}}CHF{{else format=="Koruna"}}Kč{{else format=="Krona"}}kr{{else format=="Pesos"}}&#36;{{else format=="Pounds"}}£{{else format=="Ringgit"}}RM{{else format=="Shekel"}}₪{{else format=="Yen"}}¥{{else format=="Zloty"}}zł{{else format=="Taiwan"}}&#36;{{else format=="SGDollars"}}&#36;{{else format=="Ruble"}}руб{{else format=="NZD"}}&#36;{{else format=="NOK"}}kr{{else format=="HKD"}}&#36;{{else format=="DKK"}}kr{{else format=="CAD"}}&#36;{{else format=="BRL"}}R&#36;{{else format=="AUD"}}&#36;{{else format=="Grosze"}}zł{{/if}}</span>' +
                '<input class="input-medium" type="text" placeholder="${value}" />' +
                '</div>' +
                '{{if showCurrencyTitle=="Yes"}}' +
                '<span class="jsn-help-block-inline">${format}</span>' +
                '{{/if}}</div>' +
                '{{if format!="Yen" && format!="Rupee"}}' +
                '<div class="jsn-inline currency-cents">' +
                '<div class="controls-inner">' +
                '<input class="input-mini" type="text" placeholder="${cents}" />' +
                '</div>' +
                '{{if showCurrencyTitle=="Yes"}}' +
                '<span class="jsn-help-block-inline">{{if format=="Haht"}}Satang{{else format=="Dollars"}}Cents{{else format=="Euros"}}Cents{{else format=="Forint"}}Filler{{else format=="Francs"}}Rappen{{else format=="Koruna"}}Haléřů{{else format=="Krona"}}Ore{{else format=="Pesos"}}Centavos{{else format=="Pounds"}}Pence{{else format=="Ringgit"}}Sen{{else format=="Shekel"}}Agora{{else format=="Zloty"}}Grosz{{else format=="Taiwan"}}Cents{{else format=="SGDollars"}}Cents{{else format=="Ruble"}}Kopek{{else format=="NZD"}}Cents{{else format=="NOK"}}Ore{{else format=="HKD"}}Cents{{else format=="DKK"}}Ore{{else format=="CAD"}}Cents{{else format=="BRL"}}Centavos{{else format=="AUD"}}Cents{{else format=="Grosze"}}Groszey{{/if}}</span>' +
                '{{/if}}</div>{{/if}}' +
                '</div>' +
                '</div>'
            });
            //Password controls
            JSNVisualDesign.register('password', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_PASSWORD'],
                group:'extra',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_PASSWORD'],
                    instruction:'',
                    required:0,
                    limitMin:0,
                    limitMax:0,
                    confirmation:false,
                    encrypt:'text',
                    hideField:false,
                    value:''
                },
                params:{
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        inputsize:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><required/><hideField/></div><div class="pull-right"><size/></div><div class="clearbreak"></div></div>',
                            elements:{
                                size:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_SIZE'],
                                    options:{
                                        'jsn-input-mini-fluid':language['JSN_UNIFORM_MINI'],
                                        'jsn-input-small-fluid':language['JSN_UNIFORM_SMALL'],
                                        'jsn-input-medium-fluid':language['JSN_UNIFORM_MEDIUM'],
                                        'jsn-input-xlarge-fluid':language['JSN_UNIFORM_LARGE']
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }
                                },
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                },
                                required:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED']
                                }
                            }
                        }
                    },
                    values:{
                        value:{
                            type:'text',
                            label:language['JSN_UNIFORM_PREDEFINED_VALUE']
                        },
                        valueConfirmation:{
                            type:'text'
                        },
                        optionsPassword:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><confirmation/></div><div class="pull-right"><encrypt/></div><div class="clearbreak"></div></div>',
                            elements:{
                                confirmation:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRED_CONFIRMATION']
                                },
                                encrypt:{
                                    type:'select',
                                    label:language['JSN_UNIFORM_ENCRYPTION'],
                                    options:{
                                        'text':language['JSN_UNIFORM_NO_ENCRYPTION'],
                                        'md5':'MD5',
                                        'sha1':'SHA-1'
                                    },
                                    attrs:{
                                        'class':'input-medium'
                                    }

                                }
                            }
                        },
                        limit:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><limitation/><limitMin/><limitMax/> characters</div>',
                            elements:{
                                limitation:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_REQUIRE_LENGTH']
                                },
                                limitMin:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_WITHIN'],
                                    validate:['number']
                                },
                                limitMax:{
                                    type:'number',
                                    label:language['JSN_UNIFORM_AND'],
                                    validate:['number']
                                }
                            }
                        }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}} jsn-group-field"><label class="control-label">${label}{{if required==1||required=="1"}}<span class="required">*</span>{{/if}}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls"><input type="password" placeholder="${value}"  class="${size}"/>{{if confirmation}}<br/><input type="password" placeholder="${valueConfirmation}"  class="${size}"/>{{/if}}</div></div>'
            });
            //Identification Code controls
            JSNVisualDesign.register('identification-code', {
                caption:language['JSN_UNIFORM_DEFAULT_LABEL_IDENTIFICATION_CODE'],
                elmtitle:language['JSN_UNIFORM_IDENTIFICATION_CODE_ELEMENT_DESCRIPTION_LABEL'],
                group:'standard',
                defaults:{
                    label:language['JSN_UNIFORM_DEFAULT_LABEL_IDENTIFICATION_CODE'],
                    instruction:'',
                    customClass:'',
                    size:'jsn-input-medium-fluid',
                    identificationCode:'JSN-',
                    showInNotificationEmail: 'Yes',
                    identificationCodeType:'Both',
                    identificationCodeLength:'16'
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        label:{
                            type:'text',
                            label:language['JSN_UNIFORM_TITLE']
                        },
                        customClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        instruction:{
                            type:'textarea',
                            label:language['JSN_UNIFORM_INSTRUCTION']
                        },
                        extra:{
                            type:'group',
                            decorator:'<div class="jsn-form-bar"><div class="pull-left"><hideField/></div><div class="clearbreak"></div></div>',

                            elements:{
                                hideField:{
                                    type:'checkbox',
                                    label:language['JSN_UNIFORM_HIDDEN']
                                }
                            }
                        }
                    },
                    /* Parameters on values tab */
                    values:{
                        identificationCode:{
                            type:'text',
                            label:language['JSN_UNIFORM_CODE_ID_PREFIX']
                        },
                       extraIdentificationCodeParams:{
                           type:'group',
                           decorator:'<div class="jsn-form-bar"><identificationCodeType/><identificationCodeLength/></div>',
                           elements:{
                               identificationCodeType: {
                                     type:'select',
                                        label:language['JSN_UNIFORM_IDENTIFICATION_CODE_TYPE'],
                                      options:{
                                          'Both':language['JSN_UNIFORM_BOTH'],
                                          'Number':language['JSN_UNIFORM_NUMBER'],
                                          'Characters':language['JSN_UNIFORM_CHARACTERS']
                                      },
                                      attrs:{
                                          'class':'input-small'
                                      }
                                 },
                                 identificationCodeLength:{
                                     type:'number',
                                     label:language['JSN_UNIFORM_IDENTIFICATION_CODE_LENGTH']
                                 },
                           }
                       },
                       extraShowInNotificationEmail:{
                           type:'group',
                           decorator:'<div class="form-inline"><showInNotificationEmail/><div>',
                           title:language['JSN_UNIFORM_ENABLE_SHOW_IN_NOTIFICATION_EMAIL'],
                           elements:{
                               showInNotificationEmail:{
                                   type:'radio',
                                   label:language['JSN_UNIFORM_ENABLE_SHOW_IN_NOTIFICATION_EMAIL'],
                                   options:{
                                       'Yes':'Yes',
                                       'No':'No'
                                   }
                               }
                           }
                       }
                    }
                },
                tmpl:'<div class="control-group ${customClass} {{if hideField}}jsn-hidden-field{{/if}}"><label class="control-label">${label}{{if instruction}}<i class="icon-question-sign"></i>{{/if}}</label><div class="controls">${identificationCode}</div></div>'
            });
            /** action Hide */
            //form action
            JSNVisualDesign.register('form-actions', {
                caption:language['JSN_UNIFORM_FORM_ACTION'],
                group:'extra',
                defaults:{
                    btnSubmit:language['JSN_UNIFORM_FORM_ACTION_SUBMIT'],
                    btnReset:language['JSN_UNIFORM_FORM_ACTION_RESET'],
                    btnNext:language['JSN_UNIFORM_FORM_ACTION_NEXT'],
                    btnPrev:language['JSN_UNIFORM_FORM_ACTION_PREV']
                },
                params:{
                    /* Parameters on general tab */
                    general:{
                        btnSubmit:{
                            type:'text',
                            label:language['JSN_UNIFORM_SUBMIT_BUTTON_TEXT']
                        },
                        btnSubmitClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        stateBtnReset:{
                            type:'radio',
                            options:{
                                'No':'No',
                                'Yes':'Yes'
                            },
                            class:'radio inline',
                            label:language['JSN_UNIFORM_SHOW_BUTTON_RESET']
                        },
                        btnReset:{
                            type:'text',
                            label:language['JSN_UNIFORM_RESET_BUTTON_TEXT'],
                            attrs:{
                                'class':'hide'
                            }
                        },
                        btnResetClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        stateBtnPreview:{
                            type:'radio',
                            options:{
                                'No':'No',
                                'Yes':'Yes'
                            },
                            editionLimited: true,
                            class:'radio inline disabled',
                            label:language['JSN_UNIFORM_SHOW_BUTTON_PREVIEW']
                        },
                        btnNext:{
                            type:'text',
                            label:language['JSN_UNIFORM_NEXT_BUTTON_TEXT']
                        },
                        btnNextClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        },
                        btnPrev:{
                            type:'text',
                            label:language['JSN_UNIFORM_PREV_BUTTON_TEXT']
                        },
                        btnPrevClass:{
                            type:'text',
                            label:language['JSN_UNIFORM_CLASS']
                        }
                    }
                },
                tmpl:language['JSN_UNIFORM_FORM_ACTION']
            });
        }
    });

